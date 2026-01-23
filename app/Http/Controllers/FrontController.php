<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Section;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {

        $hero_section = Section::where("name", "hero")->first();
        $products     = Product::paginate(6);
        return view("front.index", get_defined_vars());
    }
    public function about()
    {
        return view("front.about");
    }
    public function services()
    {
        $services = Service::paginate(4);
        return view("front.services", get_defined_vars());
    }

    public function shop(Request $request)
    {

        $categories = Category::all();
        $brands     = Brand::all();

        $query = Product::query();

        if ($request->filled('category')) {
            $query->whereIn('category_id', $request->category);
        }

        if ($request->filled('brand')) {
            $query->whereIn('brand_id', $request->brand);
        }

        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        if ($request->filled('sort')) {
            if ($request->sort == 'high_to_low') {
                $query->orderBy('price', 'desc');
            } elseif ($request->sort == 'low_to_high') {
                $query->orderBy('price', 'asc');
            }
        }

        $products = $query->paginate(12)->withQueryString();

        return view('front.shop', compact('products', 'categories', 'brands'));
    }

    public function education()
    {
        return view("front.education");
    }

    public function training()
    {
        return view("front.training");
    }
    public function boards()
    {
        $category = Category::where("name", "screens_boards")->first();
        $products = Product::where("category_id", $category->id)->paginate(12);

        return view("front.boards", compact("products"));
    }
    public function accessories()
    {
        $category = Category::where("name", "cabels_accessories")->first();
        $products = Product::where("category_id", $category->id)->paginate(12);

        return view("front.accessories", get_defined_vars());
    }
    public function productDetails(Product $product)
    {
        $similarProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(2) 
            ->get();
        return view("front.product-details", get_defined_vars());
    }
    public function learn()
    {
        return view("front.learn-more");
    }
    public function contacts()
    {
        return view("front.contacts");
    }
    public function request()
    {
        return view("front.request");
    }
    //search
    public function search()
    {
        $query = Product::query();

        // Search
        if ($search = request('search')) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        }

        // Sorting
        if ($sort = request('sort')) {
            if ($sort == 'high_to_low') {
                $query->orderBy('price', 'desc');
            } elseif ($sort == 'low_to_high') {
                $query->orderBy('price', 'asc');
            }
        } else {
            $query->orderBy('created_at', 'desc'); // Default order
        }

        $products = $query->paginate(12)->withQueryString();

        return view('front.shop', compact('products'));
    }

}
