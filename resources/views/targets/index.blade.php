@extends('layouts.app')

@section('content')
  <h1>目標金額</h1>
  @if($target->target_amount > 0)
    <h2>{{$target->target_amount}}円</h2>
  @else
    <p>金額を設定してください。</p>
  @endif
@endsection