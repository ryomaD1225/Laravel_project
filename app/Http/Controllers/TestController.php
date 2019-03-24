<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Auth;

class TestController extends Controller
{
    //テスト表示処理
    public function index(){
        $user = Auth::user();
        $account = Account::where('user_id',$user->id )->get();
        
        return view('test', [
            'user'=>$user,
            'account'=>$account
            ]); 
    }
}
