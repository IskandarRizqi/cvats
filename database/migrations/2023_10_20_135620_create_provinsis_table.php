<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('provinsis', function (Blueprint $table) {
            $table->id()->from(95);
            $table->string('nama', 25);
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement("
            INSERT INTO provinsis (id, nama) VALUES
            ('11',	'ACEH'),
            ('12',	'SUMATERA UTARA'),
            ('13',	'SUMATERA BARAT'),
            ('14',	'RIAU'),
            ('15',	'JAMBI'),
            ('16',	'SUMATERA SELATAN'),
            ('17',	'BENGKULU'),
            ('18',	'LAMPUNG'),
            ('19',	'KEPULAUAN BANGKA BELITUNG'),
            ('21',	'KEPULAUAN RIAU'),
            ('31',	'DKI JAKARTA'),
            ('32',	'JAWA BARAT'),
            ('33',	'JAWA TENGAH'),
            ('34',	'DI YOGYAKARTA'),
            ('35',	'JAWA TIMUR'),
            ('36',	'BANTEN'),
            ('51',	'BALI'),
            ('52',	'NUSA TENGGARA BARAT'),
            ('53',	'NUSA TENGGARA TIMUR'),
            ('61',	'KALIMANTAN BARAT'),
            ('62',	'KALIMANTAN TENGAH'),
            ('63',	'KALIMANTAN SELATAN'),
            ('64',	'KALIMANTAN TIMUR'),
            ('65',	'KALIMANTAN UTARA'),
            ('71',	'SULAWESI UTARA'),
            ('72',	'SULAWESI TENGAH'),
            ('73',	'SULAWESI SELATAN'),
            ('74',	'SULAWESI TENGGARA'),
            ('75',	'GORONTALO'),
            ('76',	'SULAWESI BARAT'),
            ('81',	'MALUKU'),
            ('82',	'MALUKU UTARA'),
            ('91',	'PAPUA BARAT'),
            ('94',	'PAPUA');
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinsis');
    }
};
