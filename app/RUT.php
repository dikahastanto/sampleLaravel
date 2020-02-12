<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RUT extends Model
{
    protected $table = 'tb_rut';
    protected $fillable = [
        'nik',
        'tahun',
        'jumlahZa',
        'jumlahNpk',
        'jumlahSp36',
        'jumlahUrea',
        'jumlahOrganik',
        'jumlahGabah',
        'jumlahGabahKering',
        'jumlahBeras'
    ];
}
