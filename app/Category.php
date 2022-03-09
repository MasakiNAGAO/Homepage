<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function texts(){
        return $this->hasMany('App\Text');
    }
    public function majorCategory(){
        return $this->belongsTo('App\MajorCategory');
    }
}
