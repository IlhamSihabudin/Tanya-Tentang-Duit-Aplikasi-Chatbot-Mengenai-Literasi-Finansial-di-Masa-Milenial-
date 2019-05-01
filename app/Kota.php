<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    public $table = "regencies";

    protected $fillable = [
    	'id', 'province_id', 'name'
    ];
}
