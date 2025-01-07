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
        Schema::create('THONGTINLIENLAC', function (Blueprint $table) {
            $table->string('Email', 255); 
            $table->string('Facebook', 255);
            $table->string('Twitter', 255); 
            $table->string('Instagram', 255);
            $table->string('SDT', 15);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('THONGTINLIENLAC');
    }
};
