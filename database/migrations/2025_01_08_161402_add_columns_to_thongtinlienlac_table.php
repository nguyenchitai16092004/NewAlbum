<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('thongtinlienlac', function (Blueprint $table) {
            if (!Schema::hasColumn('thongtinlienlac', 'Email')) {
                $table->string('Email')->nullable();
            }
            if (!Schema::hasColumn('thongtinlienlac', 'Facebook')) {
                $table->string('Facebook')->nullable();
            }
            if (!Schema::hasColumn('thongtinlienlac', 'Instagram')) {
                $table->string('Instagram')->nullable();
            }
            if (!Schema::hasColumn('thongtinlienlac', 'Twitter')) {
                $table->string('Twitter')->nullable();
            }
            if (!Schema::hasColumn('thongtinlienlac', 'SDT')) {
                $table->string('SDT')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('thongtinlienlac', function (Blueprint $table) {
            //
        });
    }
};