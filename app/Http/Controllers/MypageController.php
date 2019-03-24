<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    //マイページ表示処理
    public function index(){
        return view('myPage', []); 
    }
}
