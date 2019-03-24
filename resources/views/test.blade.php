@extends('layouts.app')

@section('content')
<h1>テスト表示エリア</h1>

    {{ Auth::user()->name}}
    {{ Auth::user()->email}}
    {{ Auth::user()->tell}}
    {{ Auth::user()->account->bank_name}}
    {{ Auth::user()->account->bank_code}}
      
    @foreach($account as $a)
            <p>銀行名  {{ $a->bank_name }}</p>
            <p>銀行コード  {{ $a->bank_code }}</p>
            <p>紐づいているユーザーID  {{ $a->user->name }}</p>
    @endforeach  
      
    
    
@endsection