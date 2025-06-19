<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjangbelanja';
    protected $fillable = ['KodeBarang', 'Jumlah', 'Harga'];

}
