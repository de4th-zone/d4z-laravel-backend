<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public function PostCategory()
    {
    	return $this->hasMany('App\PostCategory', 'category_id', 'id');
    }

    public function Post()
    {
        return $this->belongsToMany('App\Post', 'post_category');
    }
}
