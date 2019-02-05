@extends('layouts.app')

@section('content')
  <h1>目標金額</h1>
  @isset($targets)
    @foreach($targets as $target)
    <h2>{{ $target->target_amount }}円</h2>
    @endforeach
  @endisset
@endsection