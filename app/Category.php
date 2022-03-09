<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','slug','active'];

    public function subcategory(){
        return $this->hasMany('App\Subcategory');
    }
}

