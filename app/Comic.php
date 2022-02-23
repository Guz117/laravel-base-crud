<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'id',
        'title',
        'author',
        'page',
        'image',
        'description',
        'price',
        'available'
    ];
}
