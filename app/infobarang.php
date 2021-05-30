<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infobarang extends Model
{
    protected $fillable = [
        'kategori', 'nama', 'harga', 'jumlah', "foto"
    ];
}
