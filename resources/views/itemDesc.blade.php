@extends('layouts.app')

@section('content')
<h1>配達条件詳細</h1>



@foreach($conditions as $condition)

{{$condition->id}}
<h5 class="mb-1">{{$condition->category->category_name}}</h5>
    @foreach( $condition->user as $user)
        <p>{{ $user->name }}</p>
    @endforeach
    
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
    
    <!--オファーボタン-->
<form method="post" action="{{ url('/offerForm') }}">{{ csrf_field() }}<input type="hidden" name="condition_id" value="{{$condition->id}}"/><button class="list-group-item" type="submit">オファーする</button></form>
@endforeach



@endsection