<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tạo bảng KHACHHANG
        Schema::create('KHACHHANG', function (Blueprint $table) {
            $table->id('MaKH');
            $table->string('TenKH', 255);
            $table->string('Email', 255)->nullable();
            $table->date('NgaySinh')->nullable();
            $table->string('SDT', 15)->nullable();
            $table->string('TenDN', 50)->nullable(); 
            $table->string('MatKhau', 255)->nullable();
            $table->boolean('TrangThai')->default(1);
            $table->boolean('GioiTinh')->nullable();
            $table->binary('HinhAnh', 255);
            $table->timestamps();
        });

    
        // Tạo bảng SANPHAMYEUTHICH (Thực thể yếu)
        Schema::create('SanPhamYeuThich', function (Blueprint $table) {
            $table->unsignedBigInteger('MaKH');
            $table->unsignedBigInteger('MaSP');
            $table->date('NgayYeuThich')->nullable();
    
            $table->primary(['MaKH', 'MaSP']);
    
            $table->foreign('MaKH')->references('MaKH')->on('KHACHHANG')->onDelete('cascade');
    
            $table->foreign('MaSP')->references('MaSP')->on('SANPHAM')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KHACHHANG');
    }
};
