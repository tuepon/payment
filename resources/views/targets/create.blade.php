@extends('layouts.app')

@section('content')
  <h1>目標金額設定</h1>
	{!! Form::open(['action' => 'TargetsController@store', 'method' => 'POST']) !!}
		{{ csrf_field() }}
		{{ Form::bsText('target_amount') }}
		{{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}

@endsection