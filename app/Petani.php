<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    protected $fillable = [
        'nik',
        'password',
        'notelp',
        'lt_mt_1',
        'lt_mt_2',
        'lt_mt_3',
        'desa',
        'kecamatan',
        'kab'
    ];
}
