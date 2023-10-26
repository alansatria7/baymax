<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardGuru extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'image',
        'nama',
        'mapel',
        'mapel2',
        'mapel3',
        'mapel4',
        'mapel5',
        'intro',
        'intro2',
        'meet',
        'tentang',
        'tentang_2',
        'tentang_3',
        'tentang_4',
        'nama2',
        'tarif',
        'tarif2',
        'tarif3',
        'tarif4',
        'tarif5',
        'waktu',
        'jumlah_murid',
        'sd',
        'smp',
        'sma',

    ];

    protected $table = 'guru';

    // public function bus()
    // {
    //     return $this->belongsTo(Bus::class);
    // }
    
    
    // public function scopeFilter($query, array $filters)
    // {

     

    //     if (isset($filters['guru_id'] )) {
    //         $query->where('guru_id', $filters['guru_id']);
    //     }
        
    // }
}
