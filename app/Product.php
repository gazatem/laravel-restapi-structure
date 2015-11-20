<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function combinations()
    {
        return $this->hasMany('App\Combination');
    }


}
