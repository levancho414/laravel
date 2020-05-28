<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registracia extends Model
{
    public $table = 'register';
    protected $fillable = [
        'name', 'surname','email', 'password',
    ];
}
