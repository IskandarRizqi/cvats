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
        Schema::table('skill', function (Blueprint $table) {
           
            $table->string('bidang');
            $table->string('bagian');
            $table->string('ahli');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skill', function (Blueprint $table) {
            $table->string('bidang');
            $table->string('bagian');
            $table->string('ahli');
        });
    }
};
