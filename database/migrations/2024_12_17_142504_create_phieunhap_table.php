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
        Schema::create('PHIEUNHAP', function (Blueprint $table) {
            $table->id('MaPN');
            $table->decimal('TongTien', 10, 2); 
            $table->date('NgayNhap');
            $table->date('NgayCapNhat');
            $table->boolean('TrangThai'); 
            $table->unsignedBigInteger('MaQL'); 
            $table->timestamps();
            
            // Định nghĩa khóa ngoại
            $table->foreign('MaQL')->references('MaQL')->on('QUANLY');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PHIEUNHAP');
    }
};