<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;
    protected $table = 'tanaman';
    protected $primaryKey = 'id_tanaman';
    public $timestamps = false;
    protected $fillable = [
        'id_tanaman',
        'id_media_tanam',
        'id_jenis_tanaman',
        'id_kategori_tanaman',
        'nama_tanaman',
        'deskripsi_tanaman',
        'cara_merawat_tanaman',
        'tanah_tanaman',
        'cuaca_tanaman',
        'gambar_tanaman'
        
    ];
}
