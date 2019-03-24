<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qrcod extends Model
{
    
   protected $fillable = [
        'order_id',
        'url_a',
        'qrimg_a',
        'url_b',
        'qrimg_b',
        'flag_a',
        'flag_b',
    ];
    
    //Orderと多対多のリレーション
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
