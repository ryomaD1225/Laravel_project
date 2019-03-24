@extends('layouts.app')

@section('content')
<h1>ジョブ一覧</h1>

<!-- タブ部分 -->
<ul id="myTab" class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a href="#offers" id="offers-tab" class="nav-link active" role="tab" data-toggle="tab" aria-controls="offers" aria-selected="true">オファー</a>
  </li>
  <li class="nav-item">
    <a href="#oders" id="oders-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="oders" aria-selected="false">受注</a>
  </li>
  <li class="nav-item">
    <a href="#delivery" id="delivery-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="delivery" aria-selected="false">配達中</a>
  </li>
  <li class="nav-item">
    <a href="#slip" id="slip-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="slip" aria-selected="false">受取人不在</a>
  </li>
  <li class="nav-item">
    <a href="#complete" id="complete-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="complete" aria-selected="false">配達完了</a>
  </li>
</ul>

<!-- パネル部分 -->
<div id="myTabContent" class="tab-content mt-3">
    <!--オファーエリア-->
    <div id="offers" class="tab-pane active" role="tabpanel" aria-labelledby="offers-tab">
      　<div class="card">
          <div class="card-header">あなたにきているオファーです</div>
          <table class="table mb-0">
            <tr>
                <td>日付</td>
                <td>サービスタイプ</td>
                <td>出発地点</td>
                <td>到着地点</td>
                <td>受取時間</td>
                <td>お届け時間</td>
                <td>詳細</td>
                <td>チャット</td>
            </tr>
            @foreach($orders_1 as $order)
            <tr>
                <td>日付</td>
                @foreach($order->conditions as $condition)
                <td>{{$condition->category->category_name}}</td>
                @endforeach 
                <td></td>
                <td></td>
                <td>{{$order->start_time}}</td>
                <td>{{$order->end_time}}</td>
                <td><a href="{!! url('jobDesc/'.$order->id.'') !!}"><button id="application" type="" class="btn-info btn-lg">詳細</button></a></td>
                <td></td>
            </tr>    
            @endforeach 
          </table>
        </div>
    </div>
  
  <!--受中エリア-->
  <div id="oders" class="tab-pane" role="tabpanel" aria-labelledby="oders-tab">
      <div class="card">
          <div class="card-header">あなたが受注した仕事です。</div>
          <table class="table mb-0">
            <tr>
                <td>日付</td>
                <td>サービスタイプ</td>
                <td>出発地点</td>
                <td>到着地点</td>
                <td>受取時間</td>
                <td>お届け時間</td>
                <td>詳細</td>
                <td>チャット</td>
            </tr>
            @foreach($orders_2 as $order)
            <tr>
                <td>日付</td>
                @foreach($order->conditions as $condition)
                <td>{{$condition->category->category_name}}</td>
                @endforeach 
                <td></td>
                <td></td>
                <td>{{$order->start_time}}</td>
                <td>{{$order->end_time}}</td>
                <td><a href="{!! url('jobDesc/'.$order->id.'') !!}"><button id="application" type="" class="btn-info btn-lg">詳細</button></a></td>
                <td>チャット</td>
            </tr>    
            @endforeach
          </table>
      </div>
  </div>
  
  <!--配達中エリア-->
  <div id="delivery" class="tab-pane" role="tabpanel" aria-labelledby="delivery-tab">
      <div class="card">
          <div class="card-header">あなたが現在、配達中の仕事です。</div>
          <table class="table mb-0">
            <tr>
                <td>日付</td>
                <td>サービスタイプ</td>
                <td>出発地点</td>
                <td>到着地点</td>
                <td>受取時間</td>
                <td>お届け時間</td>
                <td>詳細</td>
                <td>チャット</td>
            </tr>
            @foreach($orders_3 as $order)
            <tr>
                <td>日付</td>
                @foreach($order->conditions as $condition)
                <td>{{$condition->category->category_name}}</td>
                @endforeach 
                <td></td>
                <td></td>
                <td>{{$order->start_time}}</td>
                <td>{{$order->end_time}}</td>
                <td><a href="{!! url('jobDesc/'.$order->id.'') !!}"><button id="application" type="" class="btn-info btn-lg">詳細</button></a></td>
                <td>チャット</td>
            </tr>    
            @endforeach
          </table>
      </div>
  </div>
  
  <!--受取人不在エリア-->
  <div id="slip" class="tab-pane" role="tabpanel" aria-labelledby="slip-tab">
      <div class="card">
          <div class="card-header">受取人が不在だった仕事です。依頼者と連絡をとってください。</div>
          <table class="table mb-0">
            <tr>
                <td>日付</td>
                <td>サービスタイプ</td>
                <td>出発地点</td>
                <td>到着地点</td>
                <td>受取時間</td>
                <td>お届け時間</td>
                <td>詳細</td>
                <td>チャット</td>
            </tr>
            @foreach($orders_4 as $order)
            <tr>
                <td>日付</td>
                <@foreach($order->conditions as $condition)
                <td>{{$condition->category->category_name}}</td>
                @endforeach 
                <td></td>
                <td></td>
                <td>{{$order->start_time}}</td>
                <td>{{$order->end_time}}</td>
                <td><a href="{!! url('jobDesc/'.$order->id.'') !!}"><button id="application" type="" class="btn-info btn-lg">詳細</button></a></td>
                <td>チャット</td>
            </tr>  
            @endforeach
          </table>
      </div>
  </div>
  
  <!--配達完了エリア-->
  <div id="complete" class="tab-pane" role="tabpanel" aria-labelledby="complete-tab">
      <div class="card">
          <div class="card-header">配達が完了したものです。</div>
          <!--<div class="card-body">-->
          <!--  コンテンツ...-->
          <!--</div>-->
          <table class="table mb-0">
            <tr>
                <td>日付</td>
                <td>サービスタイプ</td>
                <td>出発地点</td>
                <td>到着地点</td>
                <td>受取時間</td>
                <td>お届け時間</td>
                <td>詳細</td>
                <td>チャット</td>
            </tr>
            @foreach($orders_5 as $order)
            <tr>
                <td>日付</td>
                @foreach($order->conditions as $condition)
                <td>{{$condition->category->category_name}}</td>
                @endforeach 
                <td></td>
                <td></td>
                <td>{{$order->start_time}}</td>
                <td>{{$order->end_time}}</td>
                <td><a href="{!! url('jobDesc/'.$order->id.'') !!}"><button id="application" type="" class="btn-info btn-lg">詳細</button></a></td>
                <td>チャット</td>
            </tr>    
            @endforeach
          </table>
      </div>
  </div>
</div>
  

@endsection