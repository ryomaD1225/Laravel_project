<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    //ユーザと1対1のリレーション
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    
    
    
}
