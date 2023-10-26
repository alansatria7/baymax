<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail3 extends Model
{
    use HasFactory;

    protected $fillable = [
        'mapel',
        'mapel2',
        'mapel3',
        'intro',
        'meet',
        'tentang',
        'nama',
        'tarif',
        'waktu',
        'jumlah_murid',
        'sd',
        'smp',
        'sma',
        'tentang_3',
        'tarif2',
        'tarif3',
        'tarif4',
        'tarif5',
    ];

    protected $table = 'detail_3';
}
