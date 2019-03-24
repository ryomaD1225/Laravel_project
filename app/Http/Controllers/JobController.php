<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Condition;
use App\Order;
use App\User; // 依頼者メールアドレスを取得するために追記 
use App\Mail\SendMail; // メールを送信するために追記
use App\Mail\SendMailReceiver; // メールを送信するために追記 受取手専用
use Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode; //QRコードを生成するため
use App\Qrcod; //Qrcodを読み込むために宣言


class JobController extends Controller
{
    //ジョブ条件詳細表示
    public function index($user_id){
        
        $conditions = Condition::where('id',$user_id)->get();
        
        
        return view('itemDesc', [
            'conditions'=>$conditions
            ]); 
    }
    
    
    
    
    //ジョブ一覧表示
    public function jobList(){
        //自分のIDを取得
         $user = Auth::user();
         
        //自分がしているオファー（order）を全件取得
        $orders_1 = Order::where('my_id',$user->id)->where('status_id',1)->get();
        $orders_2 = Order::where('my_id',$user->id)->where('status_id',2)->get();
        $orders_3 = Order::where('my_id',$user->id)->where('status_id',3)->get();
        $orders_4 = Order::where('my_id',$user->id)->where('status_id',4)->get();
        $orders_5 = Order::where('my_id',$user->id)->where('status_id',5)->get();
        
        
        return view('jobList', [
            'orders_1'=>$orders_1,
            'orders_2'=>$orders_2,
            'orders_3'=>$orders_3,
            'orders_4'=>$orders_4,
            'orders_5'=>$orders_5
            ]); 
    }
    
    
    //ジョブ詳細表示
    public function jobDesc($order_id){
        
        $orders = Order::where('id', $order_id)->get();
        
        return view('jobDesc', [
            'orders'=>$orders
            ]); 
    }
    
    
    
    //ジョブ承認処理
    public function jobApprove(Request $request){
        
        //対象オーダーのフラグを受注＝２に変更して保存 ※  first -> 単一レコードを取得, get() -> 複数のレコードを取得
        $order = Order::where('id', $request->order_id)->first();
        $order->status_id = 2;
        $order->save();
        
        //QRコードを発行してqrcodesテーブルに保存する処理
        // order_idはOrderテーブルのidを参照
        $id = $_POST{'order_id'};
        
        // url_aはQRコードをハッシュ化した時に生成
        $url_a = $this->makeRandStr(10);
        
        // url_bはQRコードをハッシュ化した時に生成
        $url_b = $this->makeRandStr(10);
        // flag_a,flag_bも同様に保存
        $flag_a = false;
        $flag_b = false;
        
        //QRコードを発行して依頼者と受取者にメールを送る処理
        $token = Qrcod::create([
                'order_id' => $id, 'url_a' => $url_a, 'url_b' => $url_b, 'flag_a' => $flag_a, 'flag_b' => $flag_b
            ]);
        
        // ordersテーブルから受取手のメールアドレスを取得する　例) test@gmail.com
        $receiver = $order->receiver_email;
    
        // 依頼者のメールアドレスを取得する処理, usersテーブルから参照するために必要なidを取得
        $requesterId = $order->user_id;
         
        // 上記情報を元にusersテーブルから依頼者のメールアドレスを取得
        // find()でidを指定して取得
        // https://blog.capilano-fw.com/?p=665
        $userRecord = \App\User::find($requesterId);
        
        // 上で取得したデータからユーザのメールアドレスのみを抽出
        $requesterEmail = $userRecord->email;
        
        // 受取手側へ送信するQRコードを生成する
        $receiverQRcode = base64_encode(QrCode::format('png')->size(100)->generate("https://delivery-nakano-ken10507.c9users.io/qrcode/a/{$url_a}"));
        
        // 依頼者側へ送信するQRコードを生成する
        $requesterQRcode = base64_encode(QrCode::format('png')->size(100)->generate("https://delivery-nakano-ken10507.c9users.io/qrcode/b/{$url_b}"));
        
        // mailTrapメソッドでメールを送信
        Mail::to($receiver)->send(new SendMailReceiver($receiverQRcode));
        Mail::to($requesterEmail)->send(new SendMail($requesterQRcode));
        
        

        
        //QRコードテーブルとorderを紐付ける処理
        
        
        
        return view('jobApprove'); 
    }
    
    
    // ランダムな英数字も文字列を生成する関数(https://qiita.com/TetsuTaka/items/bb020642e75458217b8a)
    public function makeRandStr($length) {
    $str = array_merge(range('a', 'z'), range('0', '9'), range('A', 'Z'));
    $r_str = null;
    for ($i = 0; $i < $length; $i++) {
        $r_str .= $str[rand(0, count($str) - 1)];
        }
    return $r_str;
    }
    
    
    //ジョブ拒否処理
    public function jobCancel(Request $request){
        
        //対象オーダーのフラグをキャンセル＝6に変更して保存
        $order = Order::where('id', $request->order_id)->first();
        $order->status_id = 6;
        $order->save();
        
        
        return view('jobCancel', []); 
    }
    
    
    
}
