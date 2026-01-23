<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view("admin.product.index", get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands     = Brand::all();
        return view("admin.product.create", get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // 1️⃣ جلب البيانات المصدقة
        $data = $request->validated();

        // 2️⃣ رفع الصورة الرئيسية
        if ($request->hasFile("image")) {
            $mainImage     = $request->file("image");
            $mainImageName = time() . '-' . $mainImage->getClientOriginalName();
            Storage::disk("public")->putFileAs("products", $mainImage, $mainImageName);
            $data["image"] = $mainImageName;
        }

        // 3️⃣ إنشاء المنتج
        $product = Product::create($data);

        // 4️⃣ رفع الصور المصغرة (thumbnails)
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                Storage::disk('public')->putFileAs('products', $image, $imageName);

                // حفظ كل صورة في جدول product_images
                $product->images()->create([
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route("admin.products.index")->with("success", "Product created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("admin.product.show", get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands     = Brand::all();
        return view("admin.product.edit", get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();

        // تحديث الصورة الرئيسية
        if ($request->hasFile("image")) {
            if (Storage::disk("public")->exists("products/" . $product->image)) {
                Storage::disk("public")->delete("products/" . $product->image);
            }
            $image      = $request->file("image");
            $image_name = time() . "-" . $image->getClientOriginalName();
            Storage::disk("public")->putFileAs("products", $image, $image_name);
            $data["image"] = $image_name;
        }

        $product->update($data);

        // تحديث الصور المصغرة (يمكنك اختيار حذف القديم أو إضافة الجديد)
        if ($request->hasFile('images')) {
            // حذف الصور القديمة
            foreach ($product->images as $oldImage) {
                if (Storage::disk('public')->exists('products/' . $oldImage->image)) {
                    Storage::disk('public')->delete('products/' . $oldImage->image);
                }
                $oldImage->delete();
            }

            // رفع الصور الجديدة
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                Storage::disk('public')->putFileAs('products', $image, $imageName);
                $product->images()->create([
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route("admin.products.index")->with("success", "Product updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // حذف الصورة الرئيسية
        if (Storage::disk("public")->exists("products/" . $product->image)) {
            Storage::disk("public")->delete("products/" . $product->image);
        }

        // حذف الصور المصغرة
        foreach ($product->images as $img) {
            if (Storage::disk('public')->exists('products/' . $img->image)) {
                Storage::disk('public')->delete('products/' . $img->image);
            }
            $img->delete();
        }

        $product->delete();

        return back()->with("success", "Product deleted successfully");
    }
}
