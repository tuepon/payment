@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">戻る</a>
  <h1>設定金額</h1>
  <h2><div class="badge badge-success">{{$target->target_amount}}円</div></h2>
  <div>登録日:{{$target->created_at}}</div>
  <br>
  <a href="/target/{{$target}}/edit" class="btn btn-default">編集画面へ</a>
  {!! Form::open(['action' => ['TargetsController@destroy', $target], 'method' => 'POST', 'class' => 'float-right', 'onsubmit' => 'return confirm("本当に削除しますか?")']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
		{{ Form::bsSubmit('削除', ['class' => 'btn btn-danger']) }}
	{!! Form::close() !!}
@endsection