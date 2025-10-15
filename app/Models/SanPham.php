<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'SanPham';  // Tên table
    protected $primaryKey = 'maSP';  // Primary key
    public $incrementing = false;  // Không auto-increment vì maSP là VARCHAR
    protected $keyType = 'string';  // Kiểu primary key là string

    // Các field có thể fill (nếu cần insert/update sau)
    protected $fillable = [
        'maSP', 'tenSP', 'giaTien', 'moTa', 'soLuongTon', 'hinhAnh', 'maDanhMuc', 'mauSac', 'dungLuong', 'ram', 'chip', 'tanSoHZ'
    ];
}