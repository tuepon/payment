@extends('layouts.app')

@section('content')
  <h1>Payment</h1>
    @if(count($payments) > 0)
      @foreach($payments as $payment)
        <div class="well">
          <h3>{{$payment->id}} <span class="badge badge-primary">{{$payment->payment}}円</span></h3>
        </div>
      @endforeach
    @endif
@endsection