<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Condition;
use App\Token;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class IndexController extends Controller
{
    
    
    //TOPページ表示処理
    public function index(){
        
        
        $conditions = Condition::where('activate_id', 1)->get();
        
        
        
        return view('index', [
            'conditions'=>$conditions
            
            ]); 
    }
    
     public function storeCodeForm(Request $request)
    {
        // throttle for too many attempts
        if (! session()->has("token_id", "user_id")) {
            return redirect("login");
        }
        
        $token = Token::find(session()->get("token_id"));
        if (! $token ||
            ! $token->isValid() ||
            $request->code !== $token->code ||
            (int)session()->get("user_id") !== $token->user->id
        ) {
            return redirect("code")->withErrors(["Invalid token"]);
        }
        $token->used = true;
        $token->save();
      
        // $this->guard()->login($token->user, session()->get('remember', false));
        session()->forget('token_id', 'user_id', 'remember');
        return redirect('/');
    }
}
