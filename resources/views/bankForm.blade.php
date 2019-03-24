@extends('layouts.app')

@section('content')
<h1>銀行口座登録フォーム</h1>
<form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/bank/add') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">銀行コード</label>
    <input type="text" name="bank_code" id="bank_code" class="form-control" placeholder="例：0001" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">銀行名</label>
    <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="例：みずほ銀行" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">支店コード</label>
    <input type="text" name="branch_code" id="branch_code" class="form-control" placeholder="例：316" value="">
    <!--<small class="text-muted">あなたのメールは他の誰とも共有しません。</small>-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">支店名</label>
    <input type="text" name="branch_name" id="branch_name" class="form-control" placeholder="例：水戸支店" value="">
  </div>
  <div class="form-group">
    <label for="exampleSelect1exampleFormControlSelect1">口座タイプ</label>
    <select class="form-control" id="type" name="type">
      <option>普通</option>
      <option>当座</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">口座番号</label>
    <input type="text" name="bank_number" id="bank_number" class="form-control" placeholder="1234567" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">口座名義人名</label>
    <input type="text" name="user_name" id="user_name" class="form-control" placeholder="テスト タロウ" value="">
  </div>
  <button type="submit" class="btn btn-primary">登録する</button>
</form>

@endsection