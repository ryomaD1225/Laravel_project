@extends('layouts.app')

@section('content')


@if($test == 1){
<p>{{$test->name}}</p>
}
@endif

@foreach($items as $item)

{{$item->name}}
{{$item->email}}
@endforeach



@endsection