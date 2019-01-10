@extends('layouts.app')

@section('content')
  <h1>Create Payment</h1>
	{!! Form::open(['action' => 'PaymentsController@store', 'method' => 'POST']) !!}
		{{ Form::bsText('payment') }}
	{!! Form::close() !!}
@endsection