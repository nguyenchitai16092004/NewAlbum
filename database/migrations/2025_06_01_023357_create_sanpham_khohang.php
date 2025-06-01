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
        Schema::create('sanpham_khohang', function (Blueprint $table) {
            $table->unsignedBigInteger('MaSP');
            $table->unsignedBigInteger('MaKho');
            $table->integer('SoLuongTon');

            // Thiết lập khóa chính kép
            $table->primary(['MaSP', 'MaKho']);

            // Nếu có quan hệ khóa ngoại, bạn có thể thêm:
            // $table->foreign('MaSP')->references('id')->on('sanphams');
            // $table->foreign('MaKho')->references('id')->on('khohangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanpham_khohang');
    }
};
