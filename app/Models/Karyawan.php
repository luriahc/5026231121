<?php
// app/Models/Karyawan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = 'kodepegawai';
    public $incrementing = false;
    protected $keyType = 'string';
    // Kita tidak menggunakan timestamp sesuai permintaan Anda
    public $timestamps = false;

    protected $fillable = [
        'kodepegawai',
        'namalengkap',
        'divisi',
        'departemen',
    ];

    /**
     * Mutator untuk mengubah namalengkap menjadi UPPERCASE
     * sebelum disimpan ke database.
     */
    protected function namalengkap(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => strtoupper($value),
        );
    }

    /**
     * Mutator untuk mengubah departemen menjadi lowercase
     * sebelum disimpan ke database.
     */
    protected function departemen(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => strtolower($value),
        );
    }
}