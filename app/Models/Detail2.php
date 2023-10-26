<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'mapel',
        'mapel2',
        'mapel3',
        'mapel4',
        'mapel5',
        'intro',
        'meet',
        'tentang',
        'tentang_2',
        'nama',
        'tarif',
        'waktu',
        'jumlah_murid',
        'sma',
        'tentang_3',
        'tentang_4',
        'tarif2',
        'tarif3',
        'tarif4',
        'tarif5',
    ];

    protected $table = 'detail_2';
}
