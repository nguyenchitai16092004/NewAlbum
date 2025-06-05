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
        Schema::create('khohang', function (Blueprint $table) {
            $table->bigIncrements('MaKho');  // bigint unsigned, auto-increment
            $table->unsignedBigInteger('MaQL');  // bigint unsigned
            $table->date('NgayNhap');
            $table->date('NgayXuat');
            $table->string('DiaChi', 255);
            $table->string('TenKho', 255);
            $table->boolean('TrangThai')->default(1);
            $table->timestamps();

            // Nếu muốn có khóa ngoại MaQL → bang QuanLy (hoặc bảng khác), thêm:
            // $table->foreign('MaQL')->references('MaQL')->on('ten_bang_quanly')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khohang');
    }
};
