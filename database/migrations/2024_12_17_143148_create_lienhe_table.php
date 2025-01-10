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
        Schema::create('LIENHE', function (Blueprint $table) {
            $table->id('MaLH');  
            $table->string('Ten', 255);
            $table->string('SDT', 15); 
            $table->string('Email', 255); 
            $table->text('TinNhan'); 
            $table->boolean('TrangThai')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LIENHE');
    }
};
