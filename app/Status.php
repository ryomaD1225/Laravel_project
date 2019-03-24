<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //Orderと多対多のリレーション
    public function order()
    {
        return $this->belongsToMany('App\Order');
    }
}
