@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/target/{{$target->id}}">戻る</a>
  <h1>目標金額編集</h1>
	{!! Form::open(['action' => ['TargetsController@update', $target->id], 'method' => 'POST']) !!}
		{{ Form::bsText('target', $target->target_amount) }}
    {{ Form::hidden('_method', 'PUT') }}
		{{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}
@endsection