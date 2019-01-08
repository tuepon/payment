@extends('layouts.app')

@section('content')
  <h1>Payment</h1>
  @if(count($payments) > 0)
    @foreach($payments as $payment)
      <div class="well">
        <h3>{{$payment->id}}</h3><span class="label label-danger">{{$payment->payment}}円</span>
      </div>
    @endforeach
  @endif
@endsection