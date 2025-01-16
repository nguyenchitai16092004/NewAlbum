<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sanpham', function (Blueprint $table) {
            $table->integer('luot_xem')->default(0);  // Thêm trường lượt xem
        });
    }

    public function down()
    {
        Schema::table('sanpham', function (Blueprint $table) {
            $table->dropColumn('luot_xem');
        });
    }
};
