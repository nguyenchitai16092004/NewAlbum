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
        Schema::create('SANPHAM', function (Blueprint $table) {
            $table->id('MaSP');
            $table->unsignedBigInteger('MaNhomNhacCaSi')->nullable();
            $table->unsignedBigInteger('MaSPGG')->nullable();
            $table->unsignedBigInteger('MaLoaiSP')->nullable();
            $table->string('TenSP', 255);
            $table->decimal('GiaNhap', 10, 2)->nullable();
            $table->decimal('GiaBan', 10, 2)->nullable();
            $table->string('TieuDe',255);
            $table->text('MoTa')->nullable();
            $table->integer('SoLuong')->nullable();
            $table->boolean('LoaiHang')->nullable();
            $table->boolean('TrangThai')->default(1);
            $table->integer('LuotXem')->default(0);
            $table->string('Slug', 255)->nullable();

            $table->string('HinhAnh', 255);

            // Định nghĩa khóa ngoại
            $table->foreign('MaLoaiSP')->references('MaLoaiSP')->on('LOAISP')->onDelete('cascade');
            $table->foreign('MaNhomNhacCaSi')->references('MaNhomNhacCaSi')->on('NHOMNHACCASI')->onDelete('set null');
            $table->foreign('MaSPGG')->references('MaSPGG')->on('SANPHAMGIAMGIA')->onDelete('set null');
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

            $table->string('HinhAnh',255);

    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SANPHAM');
    }
};
