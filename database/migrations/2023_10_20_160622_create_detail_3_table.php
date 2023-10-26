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
        // Schema::create('detail_3', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('mapel');
        //     $table->string('mapel2');
        //     $table->string('mapel3');
        //     $table->longText('intro');
        //     $table->string('meet');
        //     $table->longText('tentang');
        //     $table->string('nama');
        //     $table->string('tarif');
        //     $table->string('waktu');
        //     $table->string('jumlah_murid');
        //     $table->string('sd');
        //     $table->string('smp');
        //     $table->string('sma');
        //     $table->longText('tentang_3');
        //     $table->string('tarif2');
        //     $table->string('tarif3');
        //     $table->string('tarif4');
        //     $table->string('tarif5');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_3');
    }
};
