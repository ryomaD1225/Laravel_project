<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //Orderと多対多のリレーション
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
