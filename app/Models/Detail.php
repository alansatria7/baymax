<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'mapel',
        'intro',
        'meet',
        'tentang',
        'tentang_2',
        'tentang_3',
        'tentang_4',
        'nama',
        'tarif',
        'waktu',
        'jumlah_murid',
        'sd',
        'smp',
        'sma',
    ];

    protected $table = 'detail';
}
