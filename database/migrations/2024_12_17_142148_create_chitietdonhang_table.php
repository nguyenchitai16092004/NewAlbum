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
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->unsignedBigInteger('MaDH');
            $table->unsignedBigInteger('MaSP');
            $table->primary(['MaHD', 'MaSP']);
            $table->integer('SoLuong');
            $table->string('TenSP', 255);
            $table->decimal('DonGia', 10, 2);
            $table->decimal('TongTien', 10, 2);
            $table->string('HinhAnh', 255);
            $table->timestamps(); 
            
            // Định nghĩa khóa ngoại
            $table->foreign('MaDH')->references('MaDH')->on('DONHANG');
            $table->foreign('MaSP')->references('MaSP')->on('SANPHAM');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitietdonhang');
    }
};
