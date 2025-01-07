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
        Schema::create('CHITIETPHIEUNHAP', function (Blueprint $table) {
            $table->unsignedBigInteger('MaPN');
            $table->unsignedBigInteger('MaSP');
            $table->string('TenSP'); 
            $table->decimal('GiaNhap', 10, 2);
            $table->integer('SoLuong'); 
            $table->decimal('TongTien', 10, 2); 
            $table->timestamps();
            



            // Định nghĩa khóa chính cho cặp cột MaPN và MaSP
            $table->primary(['MaPN', 'MaSP']);
            
            // Khóa ngoại liên kết với PHIEUNHAP và SANPHAM
            $table->foreign('MaPN')->references('MaPN')->on('PHIEUNHAP');
            $table->foreign('MaSP')->references('MaSP')->on('SANPHAM');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CHITIETPHIEUNHAP');
    }
};
