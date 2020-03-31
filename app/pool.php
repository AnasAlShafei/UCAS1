<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pool extends Model
{
    //
    protected $table = 'pool';
    protected $fillable = [
        'name',
        'timea',
        'timeb',
        'status',
        'user_id',
    ];
}
