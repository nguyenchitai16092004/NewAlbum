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
            $table->string('TieuDeBlog', 255);
            $table->longText('NoiDung');
            $table->string('HinhAnh',255);
            $table->boolean('TrangThai')->default(1);
            $table->timestamps(); 

            // Định nghĩa khóa ngoại
            $table->foreign('MaQL')->references('MaQL')->on('QUANLY');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('BLOG');
    }
};
