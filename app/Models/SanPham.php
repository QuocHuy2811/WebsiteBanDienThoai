<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> be7e2c3dc675813ffc34190bf603c9a64669482f
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
<<<<<<< HEAD
    protected $table = 'SanPham';
    protected $primaryKey = 'maSP';
    public $incrementing = false; // Since maSP is not auto-incrementing
    protected $keyType = 'string'; // Since maSP is VARCHAR
    public $timestamps = false;
    protected $fillable = [
        'maSP', 'tenSP', 'giaTien', 'moTa', 'soLuongTon', 'hinhAnh',
        'trangThai', 'maDanhMuc', 'mauSac', 'dungLuong', 'ram', 'chip', 'tanSoHz'
    ];

=======
    use HasFactory;

    protected $table = 'SanPham';  // Tên table
    protected $primaryKey = 'maSP';  // Primary key
    public $incrementing = false;  // Không auto-increment vì maSP là VARCHAR
    protected $keyType = 'string';  // Kiểu primary key là string

    // Các field có thể fill (nếu cần insert/update sau)
    protected $fillable = [
        'maSP', 'tenSP', 'giaTien', 'moTa', 'soLuongTon', 'hinhAnh', 'maDanhMuc', 'mauSac', 'dungLuong', 'ram', 'chip', 'tanSoHZ'
    ];
>>>>>>> be7e2c3dc675813ffc34190bf603c9a64669482f
}