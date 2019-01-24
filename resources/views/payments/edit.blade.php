@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/payment/{{$payment->id}}">戻る</a>
  <h1>編集画面</h1>
	{!! Form::open(['action' => ['PaymentsController@update', $payment->id], 'method' => 'POST']) !!}
		{{ Form::bsText('payment', $payment->payment) }}
		{{ Form::bsText('due', $payment->due) }}
    {{ Form::hidden('_method', 'PUT') }}
		{{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}
@endsection