<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $fillable = [
        'username_pengguna',
        'nama_pengguna',
        'telp_pengguna',
        'password_pengguna',
        'status_pengguna',
    ];

    protected $hidden = [
        'remember_token',
    ];


    public $timestamps = false;
}
