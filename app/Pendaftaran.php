<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
    	'nama_lengkap',
    	'email',
    	'no_hp',
    	'jk',
    	'provinsi',
    	'kota',
    	'tgl_lahir',
    	'password',
    ];
}
