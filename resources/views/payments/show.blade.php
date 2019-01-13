@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">戻る</a>
  <h1><a href="payment/{{$payment->id}}">{{$payment->due}}</a></h1>
  <h2>{{$payment->payment}}円&nbsp;</h2>
  <h3>登録日:<div class="badge badge-success">{{$payment->created_at->format('Y/m/d')}}</div></h3>
@endsection