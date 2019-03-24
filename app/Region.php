<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //Conditionと1対1のリレーション
    public function condition()
    {
        return $this->belongsTo('App\Condition');
    }
}
