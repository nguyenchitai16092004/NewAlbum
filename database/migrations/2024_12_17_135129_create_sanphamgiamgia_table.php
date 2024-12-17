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
        Schema::create('SANPHAMGIAMGIA', function (Blueprint $table) {
            $table->id('MaSPGG');
            $table->decimal('PhanTramGG', 2,0)->nullable();
            $table->decimal('GiaKhuyenMai', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SANPHAMGIAMGIA');
    }
};
