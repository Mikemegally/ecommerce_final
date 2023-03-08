<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('admin',function (){
    return view('admin.home');
})->middleware(['Admin','auth']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if(auth()->user()->is_admin){
        return redirect('admin');
    } else{
        return redirect()->route('userproduct.index');
    }
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('category', CategoryController::class)->middleware('Admin');
    //admin add category
    Route::resource('adminproduct', AdminProductController::class)->middleware('Admin');
    //admin add product
    Route::resource('users', UserController::class)->middleware('Admin');
    //admin control user

    Route::resource('userproduct', UserProductController::class);
    //search and all products added by admin,view the product

    Route::get('cart/add/{id}',[AddToCartController::class,'addToCart'])->name('cart.add');
    Route::get('cart',[AddToCartController::class,'cart'])->name('cart');
    Route::get('cart/remove/{id}',[AddToCartController::class,'removeFromCart'])->name('cart.remove');
});


require __DIR__.'/auth.php';
