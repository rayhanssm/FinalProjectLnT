<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'infobarang';
    protected $fillable = ['kategori', 'nama', 'harga', 'jumlah', 'foto'];
}
