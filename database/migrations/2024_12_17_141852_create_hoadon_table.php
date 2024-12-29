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
        Schema::create('HOADON', function (Blueprint $table) {
            $table->id('MaHD'); 
            $table->unsignedBigInteger('MaQL'); 
            $table->unsignedBigInteger('MaKH'); 
            $table->unsignedBigInteger('MaPTTT'); 
            $table->string('PhuongThuc', 50);
            $table->date('NgayLap');
            $table->decimal('TongTien', 10, 2);
            $table->boolean('TrangThai'); 
            $table->boolean('PTTT');
            $table->boolean('TrangThaiTT');
            $table->timestamps(); 

            // Định nghĩa khóa ngoại
            $table->foreign('MaQL')->references('MaQL')->on('QUANLY');
            $table->foreign('MaKH')->references('MaKH')->on('KHACHHANG');
            $table->foreign('MaPTTT')->references('MaPTTT')->on('PHUONGTHUCTHANHTOAN');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DONHANG');
    }
};
