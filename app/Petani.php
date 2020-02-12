<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    protected $table = 'tb_petani';
    protected $hidden = ['password'];
    protected $fillable = [
        'nik',
        'password',
        'noTelp',
        'lt_mt_1',
        'lt_mt_2',
        'lt_mt_3',
        'alamat'
    ];
}
