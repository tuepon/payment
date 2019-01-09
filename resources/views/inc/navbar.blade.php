<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>
          <a class="navbar-brand" href="/">Payment</a>
          <div id="navbar" class="collapse navbar-collapse">
              <!--<div id="navbar" class="collapse navbar-collapse"> -->
              <ul class="navbar-nav">
                <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
                <li class="{{Request::is('payment/create') ? 'active' : ''}}"><a href="payment/create">Create Payment</a></li>
              </ul>
          </div><!--/.nav-collapse -->
      </div>
</nav>