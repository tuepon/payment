@extends('layouts.app')

@section('content')
  <h1>目標金額</h1>
  @if(count($target) > 0)
    @foreach($target as $t)
    <h2><a href="target/{{$t->id}}">{{$t->id}}</a>:&nbsp;{{ $t->target_amount }}円</h2>
    @endforeach
  @endif
@endsection