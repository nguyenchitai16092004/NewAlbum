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
            $table->string('TenKH', 255)->nullable();
            $table->string('Email', 255);
            $table->date('NgaySinh')->nullable();
            $table->string('SDT', 15)->nullable();
            $table->string('TenDN', 50); 
            $table->string('MatKhau', 255);
            $table->boolean('TrangThai')->default(1);
            $table->boolean('GioiTinh')->nullable();
            $table->string('HinhAnh',255)->nullable();
            $table->string('DiaChiKH',255)->nullable();
            $table->timestamps();
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
