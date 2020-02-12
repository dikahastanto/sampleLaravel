<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RDKK extends Model
{
    protected $table = 'tb_rdkk';
    protected $fillable = [
        'nik',
        'tahun',
        'za',
        'npk',
        'sp36',
        'urea',
        'organik'
    ];
}
