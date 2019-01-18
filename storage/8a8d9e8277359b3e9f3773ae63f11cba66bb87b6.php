<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Payment</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="<?php echo e(Request::is('/') ? 'active' : ''); ?>"><a href="/">Home</a></li>
          <li class="<?php echo e(Request::is('payment/create') ? 'active' : ''); ?>">&nbsp;<a href="payment/create">入金登録</a></li>
        </ul>
    </div>
  </div>
</nav>