<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stadium extends Model
{
    //
    protected $table = 'stadium';
    protected $fillable = [
        'name_stadium',
        'timea',
        'timeb',
        'status',
        'user_id',
    ];
}
