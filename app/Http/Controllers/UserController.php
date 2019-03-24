<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class UserController extends Controller
{
    //ユーザー編集ページ表示
    public function index(){
        $user = Auth::user();
        
        return view('userEdit', [
            'user'=>$user,
            ]); 
    }
    
    //ユーザー編集処理
    public function edit(Request $request){
        
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect('/myPage');
    }
}
