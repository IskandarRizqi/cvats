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
        Schema::table('sosiallink', function (Blueprint $table) {
            $table->string('facebook');
            $table->string('instagram');
            $table->string('tiktok');
            $table->string('linkedin');
            $table->string('github');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sosiallink', function (Blueprint $table) {
            $table->string('facebook');
            $table->string('instagram');
            $table->string('tiktok');
            $table->string('linkedin');
            $table->string('github');
        });
    }
};
