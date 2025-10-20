<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LienHeController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

Route::get('/contact', [LienHeController::class, 'index'])->name('contact');
Route::post('/contact', [LienHeController::class, 'store']);

Route::get('/', [HomeController::class, 'test_sp'])->name('home');
Route::get('/home', [HomeController::class, 'test_sp']);

Route::get('/single/{maSP}', [HomeController::class, 'show_product'])->name('single');
Route::get('/cart', function () {
    return view('cart');
});
Route::prefix('page')->middleware(['web'])->group(function(){

    Route::get('/cart', [PageController::class, 'cartPage'])->name('page.cart');
    Route::get('/shop', [PageController::class, 'shopPage'])->name('page.shop');
    Route::get('/checkout', [PageController::class, 'checkoutPage'])->name('page.checkout');
    Route::get('/dangky', [PageController::class, 'dangkyPage'])->name('page.dangky');
    Route::get('/single', [PageController::class, 'singlePage'])->name('page.single');
    Route::get('/dangnhap', [loginController::class, 'showLoginForm'])->name('page.dangnhap');
});
Route::prefix('admin')->middleware(['web'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/them-san-pham',[AdminController::class,'themSanPham'])->name('admin.themsanpham');
    Route::get('/blankpage',[AdminController::class,'blankPage'])->name('admin.blankpageadmin');
});
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Kết nối database thành công!';
    } catch (\Exception $e) {
        return 'Lỗi kết nối: ' . $e->getMessage();
    }
});
//Route::get('/test_sp', [HomeController::class, 'test_sp']);