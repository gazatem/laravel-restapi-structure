<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{

    public function attributes()
    {
        return $this->hasMany('App\CompinationAttribute');
    }
}
