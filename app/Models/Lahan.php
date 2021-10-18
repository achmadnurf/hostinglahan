<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'pangkat',
        'dokumen',
        'ajb',
        'lokasi',
        'sppt',
        'luas',
        'keterangan',
        'tgl_jb',
        'jualdari',
        'jenis_tanah',
        'jenis_tanam',
        'pemilik_tanam',
        'petani',
        'diatas',
        'kemiringan'
    ];
}
