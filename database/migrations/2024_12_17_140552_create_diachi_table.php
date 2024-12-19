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
        Schema::create('DIACHI', function (Blueprint $table) {
            $table->id('MaDC'); 
            $table->unsignedBigInteger('MaKH');
            $table->string('TenDuong', 255);
            $table->string('PhuongXa', 255);
            $table->string('QuanHuyen', 255);
            $table->string('TinhTP', 255);
            $table->boolean('TrangThai');
            $table->foreign('MaKH')->references('MaKH')->on('KHACHHANG');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DIACHI');
    }
};
