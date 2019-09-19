<?php

namespace Neuweg\Post\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
    	'description'
    ];
}
