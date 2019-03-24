@extends('layouts.app')

@section('content')
<h1>配達オファーフォーム</h1>

@foreach($conditions as $condition)
<div class="main" style="height: 87vh; display: flex;">
    <!--MAPエリア-->
    <div class="map" style="width:70%; border: solid black;">
        <div id="myMap" style="position:relative;width:100%;height:100%;"></div> 
    </div>
    <!--フォームエリア-->
    <div class="form" style="width:30%; height:87vh; border: solid black; overflow: scroll;">
        @if($condition->category_id == 1)
        <!--DoorToDoor-->
        <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/offerAdd') }}">
        {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">受渡時間</label>
              <input type="datetime-local" name="start_time" id="start_time" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達時間</label>
              <input type="datetime-local" name="end_time" id="end_time" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">受渡地点住所1</label>
              <input type="text" name="departure_add1" id="departure_add1" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">受渡地点住所2</label>
              <input type="text" name="departure_add2" id="departure_add2" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">受渡地点住所3</label>
              <input type="text" name="departure_add3" id="departure_add3" class="form-control" placeholder="" value="">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">配達先住所1</label>
              <input type="text" name="arrival_add1" id="arrival_add1" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達先住所2</label>
              <input type="text" name="arrival_add2" id="arrival_add2" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達先住所3</label>
              <input type="text" name="arrival_add3" id="arrival_add3" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達先担当者名</label>
              <input type="text" name="receiver_name" id="receiver_name" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達先担当者電話番号</label>
              <input type="text" name="receiver_tell" id="receiver_tell" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達先担当者メールアドレス</label>
              <input type="text" name="receiver_email" id="receiver_email" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達物</label>
              <input type="text" name="item_desc" id="item_desc" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達物画像</label>
              <input type="text" name="item_img" id="item_img" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">備考</label>
              <input type="text" name="oder_desc" id="oder_desc" class="form-control" placeholder="" value="">
            </div>
            
            <input type="hidden" name="departure_lat" id="departure_lat" class="form-control" placeholder="" value="">
            <input type="hidden" name="departure_lon" id="departure_lon" class="form-control" placeholder="" value="">
            <input type="hidden" name="arrival_lat" id="arrival_lat" class="form-control" placeholder="" value="">
            <input type="hidden" name="arrival_lon" id="arrival_lon" class="form-control" placeholder="" value="">
            <input type="hidden" name="condition_id" id="condition_id" class="form-control" placeholder="" value="{{$condition->id}}">
            <button type="submit" class="btn btn-primary">オファーする</button>
        </form>
    @elseif($condition->category_id == 2)
        <!--DoorToStation-->
        <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/offerAdd') }}">
        {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">受渡時間</label>
              <input type="datetime-local" name="start_time" id="start_time" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達時間</label>
              <input type="datetime-local" name="end_time" id="end_time" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">受渡地点住所1</label>
              <input type="text" name="departure_add1" id="departure_add1" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">受渡地点住所2</label>
              <input type="text" name="departure_add2" id="departure_add2" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">受渡地点住所3</label>
              <input type="text" name="departure_add3" id="departure_add3" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達先地点駅名</label>
              <input type="text" name="arrival_station" id="arrival_station" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達先担当者名</label>
              <input type="text" name="receiver_name" id="receiver_name" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達先担当者電話番号</label>
              <input type="text" name="receiver_tell" id="receiver_tell" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達先担当者メールアドレス</label>
              <input type="text" name="receiver_email" id="receiver_email" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達物</label>
              <input type="text" name="item_desc" id="item_desc" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">配達物画像</label>
              <input type="text" name="item_img" id="item_img" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">備考</label>
              <input type="text" name="oder_desc" id="oder_desc" class="form-control" placeholder="" value="">
            </div>
            
            <input type="hidden" name="departure_lat" id="departure_lat" class="form-control" placeholder="" value="">
            <input type="hidden" name="departure_lon" id="departure_lon" class="form-control" placeholder="" value="">
            <input type="hidden" name="arrival_lat" id="arrival_lat" class="form-control" placeholder="" value="">
            <input type="hidden" name="arrival_lon" id="arrival_lon" class="form-control" placeholder="" value="">
            <input type="hidden" name="condition_id" id="condition_id" class="form-control" placeholder="" value="{{$condition->id}}">
            <button type="submit" class="btn btn-primary">オファーする</button>
        </form>
    @elseif($condition->category_id == 3)
        <!--StationToStation-->
        <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/offerAdd') }}">
            {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">受渡時間</label>
                  <input type="datetime-local" name="start_time" id="start_time" class="form-control" placeholder="" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">配達時間</label>
                  <input type="datetime-local" name="end_time" id="end_time" class="form-control" placeholder="" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">受渡地点駅名</label>
                  <input type="text" name="departure_station" id="departure_station" class="form-control" placeholder="" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">配達先地点駅名</label>
                  <input type="text" name="arrival_station" id="arrival_station" class="form-control" placeholder="" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">配達先担当者名</label>
                  <input type="text" name="receiver_name" id="receiver_name" class="form-control" placeholder="" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">配達先担当者電話番号</label>
                  <input type="text" name="receiver_tell" id="receiver_tell" class="form-control" placeholder="" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">配達先担当者メールアドレス</label>
                  <input type="text" name="receiver_email" id="receiver_email" class="form-control" placeholder="" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">配達物</label>
                  <input type="text" name="item_desc" id="item_desc" class="form-control" placeholder="" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">配達物画像</label>
                  <input type="text" name="item_img" id="item_img" class="form-control" placeholder="" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">備考</label>
                  <input type="text" name="oder_desc" id="oder_desc" class="form-control" placeholder="" value="">
                </div>
                
                <input type="hidden" name="departure_lat" id="departure_lat" class="form-control" placeholder="" value="">
                <input type="hidden" name="departure_lon" id="departure_lon" class="form-control" placeholder="" value="">
                <input type="hidden" name="arrival_lat" id="arrival_lat" class="form-control" placeholder="" value="">
                <input type="hidden" name="arrival_lon" id="arrival_lon" class="form-control" placeholder="" value="">
                <input type="hidden" name="condition_id" id="condition_id" class="form-control" placeholder="" value="{{$condition->id}}">
                <button type="submit" class="btn btn-primary">オファーする</button>
            </form>
    @elseif($condition->category_id == 4)
            <!--StationToDoor-->
            <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/offerAdd') }}">
                {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputEmail1">受渡時間</label>
                      <input type="datetime-local" name="start_time" id="start_time" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">配達時間</label>
                      <input type="datetime-local" name="end_time" id="end_time" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">受渡地点駅名</label>
                      <input type="text" name="departure_station" id="departure_station" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">配達地点住所1</label>
                      <input type="text" name="arrival_add1" id="arrival_add1" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">配達地点住所2</label>
                      <input type="text" name="arrival_add2" id="arrival_add2" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">配達地点住所3</label>
                      <input type="text" name="arrival_add3" id="arrival_add3" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">配達先担当者名</label>
                      <input type="text" name="receiver_name" id="receiver_name" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">配達先担当者電話番号</label>
                      <input type="text" name="receiver_tell" id="receiver_tell" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">配達先担当者メールアドレス</label>
                      <input type="text" name="receiver_email" id="receiver_email" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">配達物</label>
                      <input type="text" name="item_desc" id="item_desc" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">配達物画像</label>
                      <input type="text" name="item_img" id="item_img" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">備考</label>
                      <input type="text" name="oder_desc" id="oder_desc" class="form-control" placeholder="" value="">
                    </div>
                    
                    <input type="hidden" name="departure_lat" id="departure_lat" class="form-control" placeholder="" value="">
                    <input type="hidden" name="departure_lon" id="departure_lon" class="form-control" placeholder="" value="">
                    <input type="hidden" name="arrival_lat" id="arrival_lat" class="form-control" placeholder="" value="">
                    <input type="hidden" name="arrival_lon" id="arrival_lon" class="form-control" placeholder="" value="">
                    <input type="hidden" name="condition_id" id="condition_id" class="form-control" placeholder="" value="{{$condition->id}}">
                    <button type="submit" class="btn btn-primary">オファーする</button>
                </form>
@endif
    </div>
</div>

<script src="https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=[AnL80eNFk_6Q-l8VvT_ChjTNT5imPttgDBcP5Nxr5UPCMtPniRGUPVeIoA0bZQ1Z]" async defer></script>
<script>
  //Initialization processing
  let map;
  function GetMap() {
      map = new Microsoft.Maps.Map('#myMap', {
          center: new Microsoft.Maps.Location(35.717185, 139.730646), //Location center position
          mapTypeId: Microsoft.Maps.MapTypeId.load, //aerial,canvasDark,canvasLight,birdseye,grayscale,streetside
          zoom: 13  //Zoom:1=zoomOut ~ 20=zoomUp
      });
  }
</script>    
    
@endforeach

@endsection