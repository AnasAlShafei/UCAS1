<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bodybuilding extends Model
{
    //
    
    protected $table = 'bodybuilding';
    protected $fillable = [
        'name_machine',
        'timea',
        'timeb',
        'user_id',
        'status',
    ];

}
