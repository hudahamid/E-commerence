<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


route::get('/',[HomeController::class,'index']);


// Route::middleware([
//     'auth:sanctum', config('jetstream.auth_session'),'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);
route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_product',[AdminController::class,'add_product']);
route::get('/show_product',[AdminController::class,'show_product']);

//bo chon bo page update
route::get('/update_product/{id}',[AdminController::class,'update_product']);
//updatey productkat waragret
route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/product_details/{id}',[HomeController::class,'product_details']);

route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
route::get('/show_cart',[HomeController::class,'show_cart']);
Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart'])->name('remove_cart');

route::get('/cash_order',[HomeController::class,'cash_order']);
route::get('/stripe/{totalPrice}',[HomeController::class,'stripe']);
Route::post('stripe/{totalPrice}', [HomeController::class,'stripePost'])->name('stripe.post');


Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');