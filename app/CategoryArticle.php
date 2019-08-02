<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    //
    protected $table = 'category_articles';
    protected $fillable = ['id','name'];
}
