@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">戻る</a>
  <h1><a href="/payment/{{$payment->id}}">{{$payment->id}}</a></h1>
  <h2>{{$payment->payment}}円</h2>
  <h3>月度:<div class="badge badge-success">{{$payment->due}}</div></h3>
  <div>登録日:{{$payment->created_at->format('Y/m/d')}}</div>
  <br>
  <a href="/payment/{{$payment->id}}/edit" class="btn btn-default">編集画面へ</a>
@endsection