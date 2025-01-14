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
        Schema::create('binhluan', function (Blueprint $table) {
            $table->id('MaBL');
            $table->unsignedBigInteger('MaSP');
            $table->unsignedBigInteger('MaKH');
            $table->integer('SoSao');
            $table->text('NoiDung')->nullable();
            $table->boolean('TrangThai')->default(1);
            $table->timestamps();

            // Định nghĩa khóa ngoại
            $table->foreign('MaSP')->references('MaSP')->on('sanpham')->cascadeOnDelete();
            $table->foreign('MaKH')->references('MaKH')->on('khachhang')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('binhluans');
    }
};
