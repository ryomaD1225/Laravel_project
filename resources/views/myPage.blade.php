@extends('layouts.app')

@section('content')
<h1>マイページ</h1>

<a href="{{ url('/userEdit') }}"><button id="application" type="" class="btn-info btn-lg">プロフィール編集</button></a>
<a href="{{ url('/jobList') }}"><button id="application" type="" class="btn-info btn-lg">受注一覧</button></a>
<a href="{{ url('/offerList') }}"><button id="application" type="" class="btn-info btn-lg">依頼一覧</button></a>
<a href="{{ url('/conditionForm') }}"><button id="application" type="" class="btn-info btn-lg">ジョブ条件登録</button></a>
<a href="{{ url('/sales') }}"><button id="application" type="" class="btn-info btn-lg">売上確認</button></a>
<a href="{{ url('/bank') }}"><button id="application" type="" class="btn-info btn-lg">口座登録</button></a>
@endsection