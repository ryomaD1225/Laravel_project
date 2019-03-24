<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qrcod;
use Auth;

class QrcodeController extends Controller
{
    //QRコードAが読み込まれた時に動く処理 
    public function url_a($url){
        
        // $urlを含んだレコードを取得
        $qrcode = Qrcod::where('url_a',$url)->first();
        
        
        // qrcodeのidを取得
        $id = $qrcode->order_id;
        
        // $idと同一なレコードをOrderテーブルから取得
        $orderId = \App\Order::find($id);
        
        // $orderIdの中からmy_idを元にデータを取得
        $userId = $orderId->my_id;
        dd(Auth::user()->id);
        
        
        // 読み込んだユーザのidと上記の$user_idが一致していれば処理を行うif分技を記述する
        if($userId === Auth::user()->id){
            echo "一致";
        }else{
            echo "不一致";
        }
        // 関連するオーダーを取得
        $order = $qrcode->order();
        dd($order);
        $my_id = $order->my_id;
        dd($my_id);
        
        
       
        
       return view('jobApprove'); 
    }
    
    
    
    
    //QRコードBが読み込まれた時に動く処理
    public function url_b($url){
     
        // $urlを含んだレコードを取得
        $qrcode = Qrcod::where('url_a',$url)->first();
        
        $id = $qrcode->id;
        dd($id);
        // 関連するオーダーを取得
        $order = $qrcode->order();
         dd($order);
        $my_id = $order->my_id;
        
        
        
         dd($qrcode);
        
      return view('jobApprove'); 
    }
    
    
    
    
    
    // get通信→urlに乗っているデータを取得できる
    //post通信→裏側で持たせている複数情報を取得できる
    //厳密なルール規定はないがformとかはpostで実装するのが一般的
    
}
