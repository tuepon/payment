@extends('layouts.app')

@section('content')
  <h1>入金一覧</h1>
  <p>子どもの学費積立記録です。</p>
    @if(count($payments) > 0)
      @foreach($payments as $payment)
      <table class="table table-striped">
        <thead>
          <tr>
            <th>月度</th>
            <th>金額</th>
            <th>ID</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$payment->due}}</td>
            <td>{{$payment->payment}}円</td>
            <td><a href="payment/{{$payment->id}}">{{$payment->id}}</a></td>
          </tr>
        </tbody>
      </table>
      @endforeach
    @endif
@endsection