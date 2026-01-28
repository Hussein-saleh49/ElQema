<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DemoRequestController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TraineeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/', function () {
    return view('welcome');
});

//============= Front Theme
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

    Route::controller(FrontController::class)->prefix("front")->name("front.")->group(function () {
        //===============Home Page
        Route::get("/", "index")->name("index");
        //============About Page
        Route::get("about", "about")->name("about");
        //==============Services Page
        Route::get("services", "services")->name("services");
        //==============Shop Page
        Route::get("shop", "shop")->name("shop");
        //============== Education Page
        Route::get("education", "education")->name("education");
        //==============Training Company
        Route::get("training", "training")->name("training");
        //============== Boards
        Route::get("boards", "boards")->name("boards");
        //cabels & accessories
        Route::get("accessories", "accessories")->name("accessories");
        //============== Product Details
        Route::get("product-details/{product}", "productDetails")->name("productDetails");
        //=============== learn More
        Route::get("learn", "learn")->name("learn");
        //=============== Contact Form
        Route::get("contacts", "contacts")->name("contacts");
        //search
        Route::get('search', 'search')->name('search');
        //
        Route::post('contact', [MessageController::class, "store"])->name("contact.store");
        //
        Route::post('request', [DemoRequestController::class, "store"])->name("request.store");
        //
        Route::post('subscribe', [SubscriberController::class, "store"])->name("subscribe.store");
        //
        Route::post('trainee', [TraineeController::class, "store"])->name("trainee.store");
        //

        Route::middleware("auth")->group(function () {

            //=============== Request Demo
            Route::get("request", "request")->name("request");

            Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

            Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');

            Route::delete('/cart/remove/{item}', [CartController::class, 'remove'])->name('cart.remove');

            Route::patch('/cart/update/{item}', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');

            //
            Route::post('/cart/pay', [PaymentController::class, 'pay'])->name('pay');

            Route::get('/cart/payment/success', [PaymentController::class, 'success'])->name('payment.success');

            Route::get('/cart/payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');

        });
    });

});

// routes/web.php

//================= Admin Dashboard
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

    Route::controller(BackController::class)->prefix("admin")->name("admin.")->group(function () {
        Route::middleware("authenticateAdmin")->group(function () {
            //============== Home Page
            Route::get("/", "index")->name("index");
            //products module
            Route::controller(ProductController::class)->group(function () {
                Route::resource("products", ProductController::class);
            });
            //sections module
            Route::controller(SectionController::class)->group(function () {
                Route::resource("sections", SectionController::class);
            });
            //services module
            Route::controller(ServiceController::class)->group(function () {
                Route::resource("services", ServiceController::class);
            });
            //messages module
            Route::controller(MessageController::class)->group(function () {
                Route::resource("messages", MessageController::class)->only(["index", "show", "destroy"]);
            });
            Route::controller(DemoRequestController::class)->group(function () {
                Route::resource("requests", DemoRequestController::class)->only(["index", "show", "destroy"]);
            });
            Route::controller(SubscriberController::class)->group(function () {
                Route::resource("subscribers", SubscriberController::class)->only(["index", "show", "destroy"]);
            });
            Route::controller(TraineeController::class)->group(function () {
                Route::resource("trainees", TraineeController::class)->only(["index", "show", "destroy"]);
            });
            Route::controller(SettingController::class)->group(function () {
                Route::resource("settings", SettingController::class)->only(["index","edit","update"]);
            });

        });
        //Auth
        require __DIR__ . '/adminAuth.php';
    });
});

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    require __DIR__ . '/auth.php';
});
