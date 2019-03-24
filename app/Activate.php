<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activate extends Model
{
    //Conditionと多対多のリレーション
    public function condition()
    {
        return $this->belongsToMany('App\Condition');
    }
}
