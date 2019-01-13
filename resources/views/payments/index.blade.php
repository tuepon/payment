@extends('layouts.app')

@section('content')
  <h1>Payment</h1>
    @if(count($payments) > 0)
      @foreach($payments as $payment)
        <div class="well">
          <h3><a href="payment/{{$payment->id}}">{{$payment->id}}</a>&nbsp;
          <span class="badge badge-success">{{$payment->payment}}円</span>&nbsp;
          @php
            $payment->payment += $payment->payment;
          @endphp
          {{$payment->payment}}
          {{$payment->created_at->format('Y/m/d')}}</h3>
      @endforeach
    @endif
@endsection