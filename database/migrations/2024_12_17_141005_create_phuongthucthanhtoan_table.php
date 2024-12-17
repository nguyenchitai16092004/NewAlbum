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
        Schema::create('PHUONGTHUCTHANHTOAN', function (Blueprint $table) {
            $table->id('MaPTTT');
            $table->string('TenPTTT', 255);
            $table->boolean('TrangThai')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PHUONGTHUCTHANHTOAN');
    }
};
