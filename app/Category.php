<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Conditionと1対1のリレーション
    public function condition()
    {
        return $this->hasOne('App\Condition');
    }
}
