<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//============= Front Theme
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
    //============== Products
    Route::get("products", "products")->name("products");
    //============== Product Details
    Route::get("product-details", "productDetails")->name("productDetails");
    //=============== learn More
    Route::get("learn", "learn")->name("learn");
    //=============== Contact Form
    Route::get("contacts", "contacts")->name("contacts");
    //=============== Request Demo
    Route::get("request", "request")->name("request")->middleware("auth");
});

//================= Admin Dashboard
Route::controller(BackController::class)->prefix("admin")->name("admin.")->group(function () {
    //============== Home Page
    Route::get("/", "index")->name("index")->middleware("authenticateAdmin");
    //Auth
    require __DIR__ . '/adminAuth.php';
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

