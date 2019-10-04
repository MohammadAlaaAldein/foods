<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable= ['name','category_image'];

    public function categories()
    {
        return $this->hasMany('App\foods');
    }
}
