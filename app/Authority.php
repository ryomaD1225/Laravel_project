<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    //ユーザと1対1のリレーション
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
