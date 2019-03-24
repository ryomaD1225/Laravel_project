@extends('layouts.app')

@section('content')
<h1>ジョブ詳細</h1>

@foreach($orders as $order)

<h5 class="mb-1">依頼内容</h5>
    
    
      <small>開始時間：{{$order->start_time}} </small><br>
      <small> 終了時間：{{$order->end_time}}</small>
    
    <!--承認ボタン-->
    <form method="post" action="{{ url('/jobApprove') }}">{{ csrf_field() }}<input type="hidden" name="order_id" value="{{$order->id}}"/><button class="list-group-item" type="submit">承認</button></form>

    <!--拒否ボタン-->
    <form method="post" action="{{ url('/jobCancel') }}">{{ csrf_field() }}<input type="hidden" name="order_id" value="{{$order->id}}"/><button class="list-group-item" type="submit">拒否</button></form>
@endforeach







@endsection