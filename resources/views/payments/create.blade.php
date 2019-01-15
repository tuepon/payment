@extends('layouts.app')

@section('content')
  <h1>入金登録</h1>
	{!! Form::open(['action' => 'PaymentsController@store', 'method' => 'POST']) !!}
		{{ Form::bsText('payment') }}
		{{ Form::bsText('due') }}
		{{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}
@endsection