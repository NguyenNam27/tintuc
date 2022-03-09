<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $timestamps = false;
    protected $fillable = [ 'name','slug','category_id','active','created_at'];

    public function category(){
        return $this->belongsTo('App\category','categories_id');
    }
    public function post(){
        return $this->hasMany('App\Post');
    }
}
