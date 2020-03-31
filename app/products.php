<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //

    protected $table = 'products';
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'image',
    ];
}
