<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

Route::get('/', App\Http\Livewire\Home::class)->name('home');
Route::get('/products', App\Http\Livewire\ProductIndex::class)->name('products');
Route::get('/products/{id}', App\Http\Livewire\ProductDetail::class)->name('products.detail');
Route::get('/history', App\Http\Livewire\History::class)->name('history')->middleware('auth');
Route::get('/keranjang', App\Http\Livewire\Keranjang::class)->name('keranjang');
Route::get('/products/kategori/{kategoriId}', App\Http\Livewire\ProductKategori::class)->name('products.kategori');
Route::get('/checkout', App\Http\Livewire\Checkout::class)->name('checkout');
Route::get('/admin/create-product', App\Http\Livewire\CreateProduct::class)->name('create-product');
Route::get('/admin', App\Http\Livewire\Admin::class)->name('admin')->middleware('auth');
Route::get('/admin/edit-product/{id}', App\Http\Livewire\EditProduct::class)->name('edit-product')->middleware('auth');
Route::get('/admin/admin-order-dashboard', App\Http\Livewire\AdminOrderDashboard::class)->name('admin-order-dashboard')->middleware('auth');
Route::get('/admin/admin-order-dashboard/edit-transaction/{id}', App\Http\Livewire\EditTransaction::class)->name('edit-transaction')->middleware('auth');














