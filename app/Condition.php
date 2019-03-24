<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    //ユーザと多対多のリレーション
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
    
    //Oederと多対多のリレーション
     public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
    
    //categoryと1対多のリレーション
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    //Activateと1対多のリレーション
    public function activate()
    {
        return $this->belongsTo('App\Activate');
    }
    
    //Regionと1対1のリレーション
    public function region()
    {
        return $this->hasOne('App\Region');
    }
}
