<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//こいつを追記することでユーザの情報が取得できている
use App\Token;



class SmsController extends Controller
{
    //sms認証ページ表示処理
    public function index(Request $request){
        
         $user = Auth::user(); //登録したユーザ情報を$userへ代入
         
         // モデルクラスからcreateメソッドを呼ぶことで、インスタンスの作成→属性の代入→データの保存を一気通貫でやってくれる
         // https://qiita.com/katsunory/items/87a73297f44a65f1474f
            $token = Token::create([
                'user_id' => $user->id
            ]);
            
  
            if ($token->sendCode()) {
                 
                session()->put("token_id", $token->id);
                session()->put("user_id", $user->id);
                session()->put("remember", $request->get('remember'));
                return view("auth/code");
                
            }
            
            $token->delete();// delete token because it can't be sent
            return redirect('/login')->withErrors([
                "Unable to send verification code"
            ]);
        
        
        
        return view('auth/code'); 
    }
    
  
    /**
     * Store and verify user second factor.
     */
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
        $this->guard()->login($token->user, session()->get('remember', false));
        session()->forget('token_id', 'user_id', 'remember');
        return redirect('home');
    }
}
