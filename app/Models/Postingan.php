<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    protected $table = 'postingan';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'kategori',
        'gambar',
        'teks',
        'waktu'
    ];
}
