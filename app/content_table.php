<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content_table extends Model
{
    protected $fillable = [
       'title',
       'content',
       'featured_img',
    ];  
}
