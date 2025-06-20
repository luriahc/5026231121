<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class NewKaryawan extends Model
{
    use HasFactory;

    protected $table = 'newkaryawan';
    protected $primaryKey = 'NIP';
    public $incrementing = false;
    protected $keyType = 'string';
    // Kita tidak menggunakan timestamp sesuai permintaan Anda
    public $timestamps = false;

    protected $fillable = [
        'NIP',
        'nama',
        'pangkat',
        'gaji',
    ];

    /**
     * Mutator untuk mengubah gaji menjadi ada pemisah ribuan seperti dari 10000000
     * menjadi 10.000.000 sebelum disimpan ke database.
     */
    protected function gaji(): Attribute
    {
        return Attribute::make(
            set: fn (int $value) => $value, // Simpan sebagai integer
            get: fn (int $value) => number_format($value, 0, ',', '.') // Format saat diambil
        );
    }
    // protected function gaji(): Attribute
    // {
    //     return Attribute::make(
    //         set: fn (int $value) => number_format($value),
    //     );
    // }

}
