<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Condition;
use App\Region;

class ConditionController extends Controller
{
    //コンディション登録ページ表示処理
    public function index(){
        return view('conditionForm', []); 
    }
    
    //DoorToDoor登録処理
    public function doortodoor(Request $request){
        
        //ユーザー情報取得
        $user = Auth::user();
        
        // Eloquent モデル
        // condition情報新規登録
        $condition = new Condition;
        $condition->start_time = $request->start_time;
        $condition->end_time = $request->end_time;
        $condition->category_id = 1;
        $condition->activate_id = 1;
        $condition->desc = $request->desc;
        $condition->save(); 
        
        
        // region情報新規登録
        $region = new Region;
        $region->condition_id = $condition->id;
        $region->departure_lat = $request->departure_lat;
        $region->departure_lon = $request->departure_lon;
        $region->departure_add1	 = $request->departure_add1;
        $region->departure_add2 = $request->departure_add2;
        $region->departure_add3 = $request->departure_add3;
        $region->arrival_lat	 = $request->arrival_lat;
        $region->arrival_lon = $request->arrival_lon;
        $region->arrival_add1 = $request->arrival_add1;
        $region->arrival_add1 = $request->arrival_add1;
        $region->arrival_add3	 =$request->arrival_add3;
        $region->save(); 
        
        
        // リレーションで中間テーブル登録処理
        //ユーザーとコンディションを中間テーブルで登録
        $user->condition()->save($condition);
        
        return redirect('/'); 
    }
    
    //DoorToStation登録処理
    public function doortostation(Request $request){
                
        //ユーザー情報取得
        $user = Auth::user();
        
        // Eloquent モデル
        // condition情報新規登録
        $condition = new Condition;
        $condition->start_time = $request->start_time;
        $condition->end_time = $request->end_time;
        $condition->category_id = 2;
        $condition->activate_id = 1;
        $condition->desc = $request->desc;
        $condition->save(); 
        
        
        // region情報新規登録
        $region = new Region;
        $region->condition_id = $condition->id;
        $region->departure_lat = $request->departure_lat;
        $region->departure_lon = $request->departure_lon;
        $region->departure_add1	 = $request->departure_add1;
        $region->departure_add2 = $request->departure_add2;
        $region->departure_add3 = $request->departure_add3;
        $region->arrival_lat	 = $request->arrival_lat;
        $region->arrival_lon = $request->arrival_lon;
        $region->arrival_station = $request->arrival_station;
        $region->save(); 
        
        
        // リレーションで中間テーブル登録処理
        //ユーザーとコンディションを中間テーブルで登録
        $user->condition()->save($condition);

        return redirect('/'); 
    }
    
    //StationToStation登録処理
    public function stationtostation(Request $request){
                
        //ユーザー情報取得
        $user = Auth::user();
        
        // Eloquent モデル
        // condition情報新規登録
        $condition = new Condition;
        $condition->start_time = $request->start_time;
        $condition->end_time = $request->end_time;
        $condition->category_id = 3;
        $condition->activate_id = 1;
        $condition->desc = $request->desc;
        $condition->save(); 
        
        
        // region情報新規登録
        $region = new Region;
        $region->condition_id = $condition->id;
        $region->departure_lat = $request->departure_lat;
        $region->departure_lon = $request->departure_lon;
        $region->departure_station = $request->departure_station;
        $region->arrival_lat	 = $request->arrival_lat;
        $region->arrival_lon = $request->arrival_lon;
        $region->arrival_station = $request->arrival_station;
        $region->save(); 
        
        
        // リレーションで中間テーブル登録処理
        //ユーザーとコンディションを中間テーブルで登録
        $user->condition()->save($condition);

        return redirect('/'); 
    }
    
    //StationToDoor登録処理
    public function stationtodoor(Request $request){
                
        //ユーザー情報取得
        $user = Auth::user();
        
        // Eloquent モデル
        // condition情報新規登録
        $condition = new Condition;
        $condition->start_time = $request->start_time;
        $condition->end_time = $request->end_time;
        $condition->category_id = 4;
        $condition->activate_id = 1;
        $condition->desc = $request->desc;
        $condition->save(); 
        
        
        // region情報新規登録
        $region = new Region;
        $region->condition_id = $condition->id;
        $region->departure_lat = $request->departure_lat;
        $region->departure_lon = $request->departure_lon;
        $region->departure_station = $request->departure_station;
        $region->arrival_lat	 = $request->arrival_lat;
        $region->arrival_lon = $request->arrival_lon;
        $region->arrival_add1 = $request->arrival_add1;
        $region->arrival_add2 = $request->arrival_add2;
        $region->arrival_add3	 = $request->arrival_add3;
        $region->save(); 
        
        
        // リレーションで中間テーブル登録処理
        //ユーザーとコンディションを中間テーブルで登録
        $user->condition()->save($condition);
        
        return redirect('/');
    }
    
    
    
    
    
}
