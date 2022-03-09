<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','description','content','image','subcategories_id','hot','highlights','new_posts','active','key_words','posittion','created_at'];

    public function subcategory(){
        return $this->belongsTo("App\Subcategory","subcategories_id");
    }
}
