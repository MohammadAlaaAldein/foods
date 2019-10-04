<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    protected $fillable= ['name','description','food_image','user_id','city_id','category_id'];

}
