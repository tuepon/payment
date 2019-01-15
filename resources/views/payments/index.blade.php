@extends('layouts.app')

@section('content')
  <h1>入金一覧</h1>
    @if(count($payments) > 0)
      @foreach($payments as $payment)
        <div class="well">
          <h3><a href="payment/{{$payment->id}}">{{$payment->id}}</a>&nbsp;
          <span>{{$payment->payment}}円</span>&nbsp;
          <span class="badge badge-success">{{$payment->due}}</span>&nbsp;
          {{$payment->created_at->format('Y/m/d')}}</h3>
      @endforeach
    @endif
@endsection