<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanans'; 
    
    protected $fillable = [
        'user_id',
        'tanggal',
        'jumlah_harga',
        'kode',
        'bukti_transfer' 
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pesananDetails()
    {
        return $this->hasMany(PesananDetail::class, 'id_pesanan', 'id');
    }
}
