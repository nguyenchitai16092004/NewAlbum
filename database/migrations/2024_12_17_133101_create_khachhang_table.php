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
        Schema::create('KHACHHANG', function (Blueprint $table) {
            $table->id('MaKH');
            $table->string('TenKH', 255);
            $table->string('Email', 255)->nullable();
            $table->date('NgaySinh')->nullable();
            $table->string('SDT', 15)->nullable();
            $table->string('TenDN', 50)->nullable(); 
            $table->string('MatKhau', 255)->nullable();
            $table->boolean('TrangThai')->default(1);
            $table->boolean('GioiTinh')->nullable();
            $table->binary('HinhAnh',255);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KHACHHANG');
    }
};
