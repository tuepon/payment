@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">戻る</a>
  <h1><a href="payment/{{$payment->id}}">{{$payment->id}}</a>&nbsp;<span class="badge badge-success">{{$payment->payment}}円</span>&nbsp;{{$payment->created_at}}</h1>
@endsection