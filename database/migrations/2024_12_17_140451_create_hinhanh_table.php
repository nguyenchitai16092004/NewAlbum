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
        Schema::create('HINHANH', function (Blueprint $table) {
            $table->id('MaHinhAnh');
            $table->unsignedBigInteger('MaMT')->nullable();
            $table->string('MoTaHinhAnh', 255)->nullable();
            $table->string('HinhAnh', 255);
            $table->unsignedBigInteger('MaSP');
        
            $table->foreign('MaMT')->references('MaMT')->on('MOTA')->onDelete('set null');
            $table->foreign('MaSP')->references('MaSP')->on('SANPHAM')->onDelete('cascade');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HINHANH');
    }
};
