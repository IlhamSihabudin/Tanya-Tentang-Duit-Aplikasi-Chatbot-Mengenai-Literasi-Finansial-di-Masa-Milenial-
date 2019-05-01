<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    public $table = "provinces";

    protected $fillable = [
    	'id', 'name'
    ];
}
