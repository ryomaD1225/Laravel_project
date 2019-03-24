@extends('layouts.app')

@section('content')
<h1>オファー登録前確認フォーム</h1>

<h2>この内容で問題ないですか?問題なければオファーします</h2>

<a href="{{ url('/offerAdd') }}"><button id="application" type="" class="btn-info btn-lg">オファー</button></a>
@endsection