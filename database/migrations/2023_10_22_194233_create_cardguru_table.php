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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nama');
            $table->string('nama2');
            $table->string('mapel');
            $table->string('mapel2');
            $table->string('mapel3');
            $table->string('mapel4');
            $table->string('mapel5');
            $table->string('intro');
            $table->longText('intro2');
            $table->string('meet');
            $table->longText('tentang');
            $table->longText('tentang_2');
            $table->longText('tentang_3');
            $table->longText('tentang_4');
            $table->string('tarif');
            $table->string('tarif2');
            $table->string('tarif3');
            $table->string('tarif4');
            $table->string('tarif5');
            $table->string('waktu');
            $table->string('jumlah_murid');
            $table->string('sd');
            $table->string('smp');
            $table->string('sma');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardguru');
    }
};
