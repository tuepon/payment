@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <ul>
                        <li class="{{ Request::is('payment/create') ? 'active' : '' }}">&nbsp;<a href="/payment/create">入金登録</a></li>
                        <li class="{{ Request::is('target/create') ? 'active' : '' }}">&nbsp;<a href="/target/create">目標金額設定</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
