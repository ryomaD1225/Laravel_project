<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Auth;

class BankController extends Controller
{
    //登録フォーム表示処理
    public function index(){
        return view('bankForm', []); 
    }
    
    //登録処理
    public function add(Request $request){
        
        // ユーザのID取得
        $user = Auth::user()->id;
        
        // Eloquent モデル
        // 新規口座情報登録
        $account = new Account;
        $account->user_id = $user;
        $account->bank_code = $request->bank_code;
        $account->bank_name = $request->bank_name;
        $account->branch_code = $request->branch_code;
        $account->branch_name = $request->branch_name;
        $account->type = $request->type;
        $account->bank_number = $request->bank_number;
        $account->user_name = $request->user_name;
        $account->save(); 
        
        
        return view('myPage', []); 
    }
}
