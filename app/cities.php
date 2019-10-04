<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    protected $fillable= ['name', 'country','city_image','flag'];

    public function cities()
    {
        return $this->hasMany('App\foods');
    }
}
