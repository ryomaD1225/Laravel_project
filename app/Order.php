<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Conditionと多対多のリレーション
    public function conditions()
    {
        return $this->belongsToMany('App\Condition');
    }
    
    //Addressと1対1のリレーション
    public function address()
    {
        return $this->hasOne('App\Address');
    }
    
    //Qrcodeと1対1のリレーション
    public function qrcode()
    {
        return $this->hasOne('App\Qrcod');
    }
    
     //Statusと多対多のリレーション
    public function status()
    {
        return $this->belongsToMany('App\Status');
    }
 
    
    
}
