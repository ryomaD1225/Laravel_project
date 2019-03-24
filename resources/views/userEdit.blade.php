@extends('layouts.app')

@section('content')
<h1>ユーザー情報編集ページ</h1>

    <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/userEdit/action') }}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="exampleInputEmail1">ユーザー名</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="" value="{{$user->name}}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">メールアドレス</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="" value="{{$user->email}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">電話番号</label>
        <input type="text" name="phone" id="phone" class="form-control" placeholder="09012345678" value="{{$user->phone}}">
        <small class="text-muted">ハイフンは付けないでください</small>
      </div>
      <button type="submit" class="btn btn-primary">登録する</button>
    </form>

@endsection