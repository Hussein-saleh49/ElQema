<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * إنشاء Stripe Checkout Session للدفع
     */
    public function pay()
    {
        // استدعاء getCart() من CartController
        $cartController = new CartController();
        $cart = $cartController->getCart();

        $cartItems = $cart->items()->with('product')->get();

        $totalAmount = $cartItems->sum(fn($i) => $i->product->price * $i->quantity);

        if ($totalAmount <= 0) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // إعداد مفتاح Stripe
        Stripe::setApiKey(config('services.stripe.secret'));

        // إنشاء Session
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'egp',
                    'product_data' => [
                        'name' => 'Cart Payment',
                    ],
                    'unit_amount' => $totalAmount * 100, // Stripe يقبل السعر بالـ "cents"
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route("front.payment.success"),
            'cancel_url' => route('front.payment.cancel'),
        ]);

        // إعادة التوجيه لصفحة الدفع
        return redirect($session->url);
    }

    /**
     * صفحة الدفع الناجح
     */
    public function success()
    {
        $cartController = new CartController();
        $cart = $cartController->getCart();

        // تفريغ السلة بعد الدفع (اختياري)
        $cart->items()->delete();

        return redirect()->route("front.cart.index")->with('success', 'Payment successful!');
    }

    /**
     * صفحة الدفع الملغى
     */
    public function cancel()
    {
        return redirect()->route('front.cart.index')->with('error', 'Payment cancelled.');
    }
}
