<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','country_code','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    
    //accountと1対1のリレーション
    public function account()
    {
        return $this->hasOne('App\Account');
    }
    
    //authorityと1対1のリレーション
    public function authority()
    {
        return $this->belongsToMany('App\Authority');
    }
    
    //conditionと多対多のリレーション
    public function condition()
    {
        return $this->belongsToMany('App\Condition');
    }
    
    
    
     public function tokens()
    {
        return $this->hasMany(Token::class);
    }

    /**
     * Return the country code and phone number concatenated
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->country_code.$this->phone;
    }
    
}
