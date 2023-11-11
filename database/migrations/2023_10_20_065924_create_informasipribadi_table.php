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
        Schema::create('informasipribadi', function (Blueprint $table) {
            $table->id();
            $table->text('gambar');
            $table->string('nama');
            $table->string('email');
            $table->text('no_hp');
            $table->text('no_wa');      
            $table->string('provinsi');
            $table->string('kota_kab');
            $table->string('kelurahan');
            $table->text('rt');
            $table->text('rw');
            $table->text('detailalamat');
            $table->text('deskripsi');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasipribadi');
    }
};
