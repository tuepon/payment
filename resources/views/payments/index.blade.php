@extends('layouts.app')

@section('content')
  <h1>入金一覧</h1>
    @if(count($payments) > 0)
      @foreach($payments as $payment)
        <div class="well">
          <h2><span class="badge badge-success">{{$payment->due}}</span>
          {{$payment->payment}}円&nbsp;&nbsp;ID:<a href="payment/{{$payment->id}}">{{$payment->id}}</a></h2>
          
      @endforeach
    @endif
@endsection