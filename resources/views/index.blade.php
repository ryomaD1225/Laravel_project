@extends('layouts.app')

@section('content')

<!--検索フォーム-->
<nav class="navbar navbar-dark bg-dark">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="検索..." aria-label="検索...">
    <button type="submit" class="btn btn-outline-success my-2 my-sm-0">検索</button>
  </form>
</nav>

<!--メインエリア-->
<div class="main" style="height: 87vh; display: flex;">
    
    <!--左側コンテンツエリア-->
    <div class="item" style="width:25%; border: solid black;　height: 87vh; overflow: scroll;">
        <div class="list-group" style="max-width: 400px;">
          @foreach($conditions as $condition)
            <!--<a href="#" class="list-group-item list-group-item-action active">-->
            <a href="{!! url('/itemDesc/'.$condition->id.'') !!}" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$condition->category->category_name}}</h5>
                <small>
                  @foreach( $condition->user as $user)
                     <p>{{ $user->name }}</p>
                  @endforeach
                 </small>
              </div>
              @if($condition->category->id == 1)
                  <p class="mb-1">開始地点　{{$condition->region->departure_add1 }}</p>
                  <p class="mb-1">到着地点 {{$condition->region->arrival_add1 }}</p>
                @elseif($condition->category->id == 2)
                  <p class="mb-1">開始地点　{{$condition->region->departure_add1 }}</p>
                  <p class="mb-1">到着地点 {{$condition->region->arrival_station }}</p>
                @elseif($condition->category->id == 3)
                  <p class="mb-1">開始地点　{{$condition->region->departure_station }}</p>
                  <p class="mb-1">到着地点 {{$condition->region->arrival_station }}</p>
                @elseif($condition->category->id == 4)
                  <p class="mb-1">開始地点　{{$condition->region->departure_station }}</p>
                  <p class="mb-1">到着地点 {{$condition->region->arrival_add1 }}</p>
              @endif
              <small>開始時間：{{$condition->start_time}} </small><br>
              <small> 終了時間：{{$condition->end_time}}</small>
            </a>
          @endforeach  
        </div>
    </div>
    
    <!--右側マップエリア-->
    <div class="map" style="width:75%;　height:87vh; border: solid black;">
       <div id="myMap" style="position:relative;width:100%;height:100%;"></div> 
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