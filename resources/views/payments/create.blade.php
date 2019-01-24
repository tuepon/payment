@extends('layouts.app')

@section('content')
  <h1>入金登録</h1>
	{!! Form::open(['action' => 'PaymentsController@store', 'method' => 'POST']) !!}
		{{ csrf_field() }}
		{{ Form::bsText('payment') }}
		{{ Form::bsText('due') }}
		{{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}
@endsection