<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',  
    ];
    public function post(){
        return $this->belongsToMany(Post::class);
    }
}
