<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Condition;
use App\Order;
use App\Address;

class OfferController extends Controller
{
    //オファーフォーム表示
    public function index(Request $request){
        
        //conditionの取得
        $conditions = Condition::where('id', $request->condition_id)->get();
        
        
        return view('offerForm', [
            'conditions'=>$conditions
            ]); 
    }
    
    
    
    //オファーフォームの内容確認表示
    public function conf(){
        return view('offerConfirmation', []); 
    }
    
    
    
    //オファーフォームの内容登録処理
    public function offerAdd(Request $request){
        
         //conditionの取得
        $condition = Condition::where('id', $request->condition_id)->first();
        $my = $condition->user()->first();
        
        //依頼者のID取得
        $user = Auth::user();
        
        // Eloquent モデル
        // 新規oderの作成
        $order = new Order;
        $order->my_id = $my->id;
        $order->user_id = $user->id;
        $order->start_time = $request->start_time;
        $order->end_time = $request->end_time;
        $order->amount = 1500;
        $order->receiver_name = $request->receiver_name;
        $order->receiver_tell = $request->receiver_tell;
        $order->receiver_email = $request->receiver_email;
        $order->status_id = 1;
        $order->save(); 
        
        
        // Eloquent モデル
        // 新規addressの作成
        $address = new Address;
        $address->order_id = $order->id;
        $address->departure_lat = $request->departure_lat;
        $address->departure_lon = $request->departure_lon;
        $address->departure_add1 = $request->receiver_name;
        $address->departure_add2 = $request->receiver_tell;
        $address->departure_add3 = $request->receiver_email;
        $address->departure_station = $request->departure_station;
        $address->arrival_lat = $request->arrival_lat;
        $address->arrival_lon = $request->arrival_lon;
        $address->arrival_add1 = $request->arrival_add1;
        $address->arrival_add2 = $request->arrival_add2;
        $address->arrival_add3 = $request->arrival_add3;
        $address->arrival_station = $request->arrival_station;
        $address->save(); 
        
        
        // リレーションで中間テーブル登録処理
        //オーダーとコンディションを中間テーブルで登録
        $condition->orders()->save($order);
        
        return view('offerThanks', []); 
    }
    
    
    
    //オファー一覧表示
    public function offerList(){
        
        //自分のIDを取得
         $user = Auth::user();
         
        //自分がしているオファー（order）を全件取得
        $orders_1 = Order::where('user_id',$user->id)->where('status_id',1)->get();
        $orders_2 = Order::where('user_id',$user->id)->where('status_id',2)->get();
        $orders_3 = Order::where('user_id',$user->id)->where('status_id',3)->get();
        $orders_4 = Order::where('user_id',$user->id)->where('status_id',4)->get();
        $orders_5 = Order::where('user_id',$user->id)->where('status_id',5)->get();
        
        
        
        return view('offerList', [
            'orders_1'=>$orders_1,
            'orders_2'=>$orders_2,
            'orders_3'=>$orders_3,
            'orders_4'=>$orders_4,
            'orders_5'=>$orders_5
            ]); 
    }
}
