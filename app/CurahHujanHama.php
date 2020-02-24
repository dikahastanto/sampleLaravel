<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurahHujanHama extends Model
{
    protected $table = 'tb_curah_hujan_hama';
    protected $fillable = [
        'tahun',
        'curahHujan',
        'hama'
    ];
}
