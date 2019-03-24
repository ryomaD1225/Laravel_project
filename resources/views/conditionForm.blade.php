@extends('layouts.app')

@section('content')
<h1>ジョブ条件登録フォーム</h1>
<div class="main" style="height: 87vh; display: flex;">
  <!--Mapエリア-->
  <div class="map" style="width:70%; border: solid black;">
    <div id="myMap" style="position:relative;width:100%;height:100%;"></div> 
  </div>
  
  
  <!--フォームエリア-->
  <div class="form" style="width:30%; height:87vh; border: solid black;">
     <h2>サービスタイプ選択</h2>
      <!-- タブ部分開始 -->
      <ul id="myTab" class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a href="#doortodoor" id="doortodoor-tab" class="nav-link active" role="tab" data-toggle="tab" aria-controls="doortodoor" aria-selected="true">DTD</a>
        </li>
        <li class="nav-item">
          <a href="#doortostation" id="doortostation-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="doortostation" aria-selected="false">DTS</a>
        </li>
        <li class="nav-item">
          <a href="#stationtostation" id="stationtostation-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="stationtostation" aria-selected="false">STS</a>
        </li>
        <li class="nav-item">
          <a href="#stationtodoor" id="stationtodoor-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="stationtodoor" aria-selected="false">STD</a>
        </li>
      </ul>
      <!-- タブ部分終了 -->
      
      
      <!-- パネル部分開始 -->
      
        <div id="myTabContent" class="tab-content mt-3">
            <!--オファーエリア-->
            <div id="doortodoor" class="tab-pane active" role="tabpanel" aria-labelledby="doortodoor-tab">
              　<div class="card">
                  <div class="card-header">仕事の条件をDoorToDoorで登録します</div>
                    <div style="height: 67vh; overflow: scroll;">
                      <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/doortodoor') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始時間</label>
                              <input type="datetime-local" name="start_time" id="start_time" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了時間</label>
                              <input type="datetime-local" name="end_time" id="end_time" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始地点住所1</label>
                              <input type="text" name="departure_add1" id="departure_add1" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始地点住所2</label>
                              <input type="text" name="departure_add2" id="departure_add2" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始地点住所3</label>
                              <input type="text" name="departure_add3" id="departure_add3" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了地点住所1</label>
                              <input type="text" name="arrival_add1" id="arrival_add1" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了地点住所2</label>
                              <input type="text" name="arrival_add2" id="arrival_add2" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了地点住所3</label>
                              <input type="text" name="arrival_add3" id="arrival_add3" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">備考欄</label>
                              <input type="text" name="desc" id="desc" class="form-control" placeholder="" value="">
                            </div>
                            <input type="hidden" name="departure_lat" id="departure_lat" class="form-control" placeholder="" value="">
                            <input type="hidden" name="departure_lon" id="departure_lon" class="form-control" placeholder="" value="">
                            <input type="hidden" name="arrival_lat" id="arrival_lat" class="form-control" placeholder="" value="">
                            <input type="hidden" name="arrival_lon" id="arrival_lon" class="form-control" placeholder="" value="">
                            <button type="submit" class="btn btn-primary">登録する</button>
                      </form>
                    </div>  
                </div>
            </div>
          
          <!--受中エリア-->
          <div id="doortostation" class="tab-pane" role="tabpanel" aria-labelledby="doortostation-tab">
              <div class="card">
                  <div class="card-header">仕事の条件をDoorToStationで登録します。</div>
                  <div style="height: 67vh; overflow: scroll;">
                      <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/doortostation') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始日時</label>
                              <input type="datetime-local" name="start_time" id="start_time" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了日時</label>
                              <input type="datetime-local" name="end_time" id="end_time" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始地点住所1</label>
                              <input type="text" name="departure_add1" id="departure_add1" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始地点住所2</label>
                              <input type="text" name="departure_add2" id="departure_add2" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始地点住所3</label>
                              <input type="text" name="departure_add3" id="departure_add3" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了地点駅名</label>
                              <input type="text" name="arrival_station" id="arrival_station" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">備考欄</label>
                              <input type="text" name="desc" id="desc" class="form-control" placeholder="" value="">
                            </div>
                            <input type="hidden" name="departure_lat" id="departure_lat" class="form-control" placeholder="" value="">
                            <input type="hidden" name="departure_lon" id="departure_lon" class="form-control" placeholder="" value="">
                            <input type="hidden" name="arrival_lat" id="arrival_lat" class="form-control" placeholder="" value="">
                            <input type="hidden" name="arrival_lon" id="arrival_lon" class="form-control" placeholder="" value="">
                            <button type="submit" class="btn btn-primary">登録する</button>
                      </form>
                    </div>  
              </div>
          </div>
          
          <!--配達中エリア-->
          <div id="stationtostation" class="tab-pane" role="tabpanel" aria-labelledby="stationtostation-tab">
              <div class="card">
                  <div class="card-header">仕事の条件をStationToStationで登録します。</div>
                  <div style="height: 67vh; overflow: scroll;">
                      <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/stationtostation') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始日時</label>
                              <input type="datetime-local" name="start_time" id="start_time" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了日時</label>
                              <input type="datetime-local" name="end_time" id="end_time" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始地点駅名</label>
                              <input type="text" name="departure_station" id="departure_station" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了地点駅名</label>
                              <input type="text" name="arrival_station" id="arrival_station" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">備考欄</label>
                              <input type="text" name="desc" id="desc" class="form-control" placeholder="" value="">
                            </div>
                            <input type="hidden" name="departure_lat" id="departure_lat" class="form-control" placeholder="" value="">
                            <input type="hidden" name="departure_lon" id="departure_lon" class="form-control" placeholder="" value="">
                            <input type="hidden" name="arrival_lat" id="arrival_lat" class="form-control" placeholder="" value="">
                            <input type="hidden" name="arrival_lon" id="arrival_lon" class="form-control" placeholder="" value="">
                            <button type="submit" class="btn btn-primary">登録する</button>
                      </form>
                    </div>  
              </div>
          </div>
          
          <!--受取人不在エリア-->
          <div id="stationtodoor" class="tab-pane" role="tabpanel" aria-labelledby="stationtodoor-tab">
              <div class="card">
                  <div class="card-header">仕事の条件をStationToDoorで登録します。</div>
                  <div style="height: 67vh; overflow: scroll;">
                      <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/stationtodoor') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始日時</label>
                              <input type="datetime-local" name="start_time" id="start_time" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了日時</label>
                              <input type="datetime-local" name="end_time" id="end_time" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">開始地点駅名</label>
                              <input type="text" name="departure_station" id="departure_station" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了地点住所1</label>
                              <input type="text" name="arrival_add1" id="arrival_add1" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了地点住所2</label>
                              <input type="text" name="arrival_add2" id="arrival_add2" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">終了地点住所3</label>
                              <input type="text" name="arrival_add3" id="arrival_add3" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">備考欄</label>
                              <input type="text" name="desc" id="desc" class="form-control" placeholder="" value="">
                            </div>
                            <input type="hidden" name="departure_lat" id="departure_lat" class="form-control" placeholder="" value="">
                            <input type="hidden" name="departure_lon" id="departure_lon" class="form-control" placeholder="" value="">
                            <input type="hidden" name="arrival_lat" id="arrival_lat" class="form-control" placeholder="" value="">
                            <input type="hidden" name="arrival_lon" id="arrival_lon" class="form-control" placeholder="" value="">
                            <button type="submit" class="btn btn-primary">登録する</button>
                      </form>
                    </div>  
              </div>
          </div>
        </div>
      
      <!-- パネル部分終了 -->
      
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
@endsection