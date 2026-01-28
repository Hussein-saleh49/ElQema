<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartController extends Controller
{
    // جلب السلة للمستخدم أو الجلسة
    public function getCart()
    {
        if (Auth::check()) {
            return Cart::firstOrCreate(['user_id' => Auth::id()]);
        } else {
            $sessionId = session()->get('cart_session', Str::random(40));
            session()->put('cart_session', $sessionId);

            return Cart::firstOrCreate(['session_id' => $sessionId]);
        }
    }

    // ✅ إضافة منتج للسلة
    public function add(Request $request, Product $product)
    {
        $cart = $this->getCart();

        $item = $cart->items()->firstOrCreate(
            ['product_id' => $product->id],
            [
                'quantity' => 0,
                'price' => $product->price
            ]
        );

        $item->increment('quantity');

        return redirect()->back()
            ->with('success', __('Product added to cart successfully'));
    }

    // ✅ حذف عنصر
    public function remove(CartItem $item)
    {
        $item->delete();

        return redirect()->back()
            ->with('success', __('Item removed from cart'));
    }

    // ✅ تحديث الكمية
    public function updateQuantity(Request $request, CartItem $item)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $item->update([
            'quantity' => $request->quantity
        ]);

        return redirect()->back()
            ->with('success', __('Cart updated successfully'));
    }

    // ✅ عرض السلة
    public function index()
    {
        $cart = $this->getCart();
        $cartItems = $cart->items()->with('product')->get();

        return view('front.cart', compact('cartItems'));
    }
}
