@extends('layouts.app')

@section('content')
  <h1>入金一覧</h1>
    <p>子どもの学費積立記録です。</p>
  <h2>目標金額:&nbsp;
    @if(count($targets) > 0)
      @foreach($targets as $target)
      {{ $target->target_amount}}円&nbsp;<button><a href="/target/edit">編集</a></button></h2>
      @endforeach
    @endif
    <h2>入金総額:&nbsp;<div class="badge badge-success">{{ $payments->sum('payment') }}円</div></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>月度</th>
        <th>金額</th>
        <th>登録日</th>
        <th>ID</th>
      </tr>
    </thead>
    <tbody>
          <tr>
            @if(count($payments) > 0)
              @foreach($payments as $p)
                <td>{{ $p->due }}</td>
                <td>{{ $p->payment }}円</td>
                <td>{{ $p->created_at->format('Y/m/d') }}</td>
                <td><a href="payment/{{$p->id}}">{{ $p->id }}</a></td>
          </tr>
              @endforeach
            @endif
    </tbody>
  </table>
@endsection