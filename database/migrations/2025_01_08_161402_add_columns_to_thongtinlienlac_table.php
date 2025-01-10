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
                $table->string('Email')->notNull();
            }
            if (!Schema::hasColumn('thongtinlienlac', 'Facebook')) {
                $table->string('Facebook')->notNull();
            }
            if (!Schema::hasColumn('thongtinlienlac', 'Instagram')) {
                $table->string('Instagram')->notNull();
            }
            if (!Schema::hasColumn('thongtinlienlac', 'Twitter')) {
                $table->string('Twitter')->notNull();
            }
            if (!Schema::hasColumn('thongtinlienlac', 'SDT')) {
                $table->string('SDT')->notNull();
            }
            // $table->string('Email');
            // $table->string('Facebook')->nullable();
            // $table->string('Instagram')->nullable();
            // $table->string('Twitter')->nullable();
            // $table->string('SDT');          
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
