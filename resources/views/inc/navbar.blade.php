<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Payment</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">ホーム</a></li>
          <li class="{{Request::is('payment/create') ? 'active' : ''}}">&nbsp;<a href="/payment/create">入金登録</a></li>
          <li class="{{Request::is('target/create') ? 'active' : ''}}">&nbsp;<a href="/target/create">目標設定</a></li>
          <li class="{{Request::is('about') ? 'active' : ''}}">&nbsp;<a href="/about">サイトについて</a></li>
        </ul>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          </div>
    </div>
  </div>
</nav>