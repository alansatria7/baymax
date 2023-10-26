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
        // Schema::create('detail', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('mapel');
        //     $table->longText('intro');
        //     $table->string('meet');
        //     $table->string('tentang');
        //     $table->longText('tentang_2');
        //     $table->string('tentang_3');
        //     $table->string('tentang_4');
        //     $table->string('nama');
        //     $table->string('tarif');
        //     $table->string('waktu');
        //     $table->string('jumlah_murid');
        //     $table->string('sd');
        //     $table->string('smp');
        //     $table->string('sma');
        //     $table->timestamps();
        // });
   
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail');
    }
};
