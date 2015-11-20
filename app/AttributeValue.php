<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{

    public function getAttributeNameAttribute()
    {
        if ($this->attribute) {
            return $this->attribute->name;
        }
        return 'undefined';
    }

    public function attribute(){
        return $this->belongsTo('App\Attribute');
    }
}
