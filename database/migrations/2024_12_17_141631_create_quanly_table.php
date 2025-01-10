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
        Schema::create('QUANLY', function (Blueprint $table) {
            $table->id('MaQL'); 
            $table->string('TenQL', 255);
            $table->date('NgaySinh');
            $table->string('ChucVu', 50);
            $table->string('Email', 255);
            $table->string('MatKhau', 255);
            $table->string('TenDN', 255);
            $table->string('SDT', 15);
            $table->boolean('GioiTinh'); 
            $table->string('HinhAnh',255)->nullable();
            $table->boolean('TrangThai');

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('QUANLY');
    }
};
