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
        Schema::create('BLOG', function (Blueprint $table) {
            $table->id('MaBL'); 
            $table->unsignedBigInteger('MaQL');
            $table->string('TenTG', 255);
            $table->longText('NoiDung');


            $table->date('NgayTao'); 

            $table->timestamps(); 

            // Định nghĩa khóa ngoại
            $table->foreign('MaQL')->references('MaQL')->on('QUANLY');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BLOG');
    }
};
