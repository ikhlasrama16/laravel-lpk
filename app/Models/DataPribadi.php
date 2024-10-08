<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPribadi extends Model
{
    use HasFactory;
    protected $fillable = [
        // Data Pribadi
        'nama',
        'email',
        'phone',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'asal_sekolah',
        'alamat',
        'kode_pos',
        'provinsi',
        'alasan_ingin_kerja',

        // Data Orang Tua
        'nama_orang_tua',
        'pekerjaan_orang_tua',
        'alamat_orang_tua',
        'phone_orang_tua',
    ];

}
