<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public $timestamps = false;

    function setAddressAttribute($value){
        // $value = $this->attributes["address"];
        if (strpos($value,'dhaka')!==false) {
            return $this->attributes['address'] = $value;
        } else {
            return $this->attributes['address'] = $value.', dhaka';
        }

    }
}