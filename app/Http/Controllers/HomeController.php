<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    }
}