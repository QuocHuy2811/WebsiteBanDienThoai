<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\SanPham;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function test_sp()
    {
        // Lấy 10 sản phẩm đầu tiên
        // $products = SanPham::take(10)->get();
        $products = SanPham::all();

        return view('home', ['products' => $products]);
    }

    public function show_product($slug)
    {
        // Tách maSP từ slug (phần đầu trước dấu '-')
        $parts = explode('-', $slug, 2);  // Giới hạn 2 phần để tránh tách tên
        $maSP = $parts[0];  // Ví dụ: 'SP001'
        
        // Query DB bằng maSP (sử dụng model cho nhất quán)
        $product = SanPham::where('maSP', $maSP)->first();
        
        if (!$product) {
            abort(404);  // Nếu không tìm thấy, trả 404
        }
        
        // Kiểm tra slug có khớp không (tùy chọn, cho SEO)
        $expectedSlug = $product->maSP . '-' . Str::slug($product->tenSP);
        if ($slug !== $expectedSlug) {
            // Redirect 301 đến URL đúng (tùy chọn)
            return redirect(route('single', ['slug' => $expectedSlug]), 301);
        }
        
        return view('single', compact('product'));
=======
use App\Models\SanPham;  // Import model

class HomeController extends Controller
{
    public function index()
    {
        // Fetch 6 sản phẩm mới nhất (ví dụ: latest products)
        $latestProducts = SanPham::where('trangThai', 'active')  // Chỉ lấy active
            ->orderBy('ngayTao', 'desc')  // Sắp xếp theo ngày tạo mới nhất
            ->take(6)  // Lấy 6 sản phẩm
            ->get();

        // Pass dữ liệu vào view
        return view('home', compact('latestProducts'));  // 'home' là tên view (home.blade.php)
>>>>>>> be7e2c3dc675813ffc34190bf603c9a64669482f
    }
}