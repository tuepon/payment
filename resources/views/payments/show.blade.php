@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">戻る</a>
  <h1>入金詳細</h1>
  <h2><div class="badge badge-success">{{$payment->due}}</div>&nbsp;{{$payment->payment}}円</h2>
  <div>登録日:{{$payment->created_at->format('Y/m/d')}}</div>
  <br>
  <a href="/payment/{{$payment->id}}/edit" class="btn btn-default">編集画面へ</a>
  {!! Form::open(['action' => ['PaymentsController@destroy', $payment->id], 'method' => 'POST', 'class' => 'float-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
		{{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
	{!! Form::close() !!}
@endsection