@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">戻る</a>
  <h1>目標金額</h1>
  <h2><div class="badge badge-success">{{$target->target_amount}}円</h2>
  <br>
  <a href="/target/{{$target->id}}/edit" class="btn btn-default">編集画面へ</a>
<!--   {!! Form::open(['action' => ['PaymentsController@destroy', $payment->id], 'method' => 'POST', 'class' => 'float-right', 'onsubmit' => 'return confirm("本当に削除しますか?")']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
		{{ Form::bsSubmit('削除', ['class' => 'btn btn-danger']) }}
	{!! Form::close() !!} -->
@endsection