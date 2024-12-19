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
        Schema::create('DONHANG', function (Blueprint $table) {

            $table->id('MaHD'); 

            $table->id('MaDH'); 
            $table->unsignedBigInteger('MaQL'); 
            $table->unsignedBigInteger('MaDC'); 
            $table->unsignedBigInteger('MaPTTT'); 

            $table->string('PhuongThuc', 50);
            $table->date('NgayLap');
            $table->decimal('TongTien', 10, 2);
            $table->boolean('TrangThai'); 

            $table->unsignedBigInteger('MaQL'); 
            $table->unsignedBigInteger('MaDC'); 
            $table->unsignedBigInteger('MaPTTT'); 

            $table->timestamps(); 

            // Định nghĩa khóa ngoại
            $table->foreign('MaQL')->references('MaQL')->on('QUANLY');
            $table->foreign('MaDC')->references('MaDC')->on('DIACHI');
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
