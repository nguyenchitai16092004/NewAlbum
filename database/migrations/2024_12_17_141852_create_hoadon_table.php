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
            $table->unsignedBigInteger('MaKH');
            $table->decimal('TongTien', 10, 2);
            $table->boolean('PTTT')->default(1);
            $table->boolean('TrangThaiTT')->default(1);
            $table->integer('TrangThai')->default(0); 
            $table->string('DiaChi',255);
            $table->timestamps(); 

            // Định nghĩa khóa ngoại
            $table->foreign('MaKH')->references('MaKH')->on('KHACHHANG');
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
