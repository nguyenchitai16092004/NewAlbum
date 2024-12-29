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
        Schema::create('BINHLUAN', function (Blueprint $table) {
            $table->unsignedBigInteger('MaSP'); 
            $table->unsignedBigInteger('MaKH'); 
            $table->integer('SoSao');
            $table->text('NoiDung'); 
            $table->primary(['MaSP', 'MaKH']); 

            // Định nghĩa khóa ngoại
            $table->foreign('MaSP')->references('MaSP')->on('SANPHAM'); 
            $table->foreign('MaKH')->references('MaKH')->on('KHACHHANG');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BINHLUAN');
    }
};
