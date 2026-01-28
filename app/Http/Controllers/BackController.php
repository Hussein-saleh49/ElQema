<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\DemoRequest;
use App\Models\Product;
use App\Models\Service;
use App\Models\Subscriber;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BackController extends Controller
{

  public function index()
{
   
    // ===============================
    // Cart analytics (last 6 months)
    // ===============================
    $salesMonths = [];
    $salesData   = [];

    for ($i = 5; $i >= 0; $i--) {

        $month = Carbon::now()->subMonths($i);

        $salesMonths[] = $month->format('M');

        $total = CartItem::join(
                'products',
                'products.id',
                '=',
                'cart_items.product_id'
            )
            ->whereYear('cart_items.created_at', $month->year)
            ->whereMonth('cart_items.created_at', $month->month)
            ->selectRaw('SUM(products.price * cart_items.quantity) as total')
            ->value('total');

        $salesData[] = $total ?? 0;
    }

    // ===============================
    // Dashboard cards
    // ===============================

    // عدد السلات
    $totalCarts = Cart::count();

    // إجمالي قيمة كل المنتجات في السلات
    $totalAmount = CartItem::join(
            'products',
            'products.id',
            '=',
            'cart_items.product_id'
        )
        ->selectRaw('SUM(products.price * cart_items.quantity) as total')
        ->value('total') ?? 0;

    // سلات اليوم
    $todayCarts = Cart::whereDate('created_at', today())->count();

    // ===============================
    // Other statistics
    // ===============================
    $productsCount     = Product::count();
    $servicesCount     = Service::count();
    $subscribersCount  = Subscriber::count();
    $demoRequestsCount = DemoRequest::count();

    $latestProducts = Product::latest()->take(5)->get();

    return view('admin.index', compact(
        'salesMonths',
        'salesData',
        'totalCarts',
        'totalAmount',
        'todayCarts',
        'productsCount',
        'servicesCount',
        'subscribersCount',
        'demoRequestsCount',
        'latestProducts'
    ));
}

    public function login()
    {
        return view("admin.auth.login");
    }
}
