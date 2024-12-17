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
        Schema::create('NHOMNHACCASI', function (Blueprint $table) {
            $table->id('MaNhomNhacCaSi');
            $table->string('TenNhomNhacCaSi', 255);
            $table->boolean('GioiTinh')->nullable();
            $table->string('Loai', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHOMNHACCASI');
    }
};
