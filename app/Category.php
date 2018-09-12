<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "categorys";
    protected $fillable = [
        'firstname', 'middlename','lastname', 'u_id','status',
    ];
}
