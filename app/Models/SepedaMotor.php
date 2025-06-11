<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SepedaMotor extends Model
{
    use HasFactory;

    // Tentukan nama tabel yang digunakan oleh model ini
    protected $table = 'sepedamotor';

    // Tentukan primary key yang digunakan
    protected $primaryKey = 'ID';

    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = [
        'merksepedamotor',
        'hargasepedamotor',
        'tersedia',
        'berat',
    ];
}