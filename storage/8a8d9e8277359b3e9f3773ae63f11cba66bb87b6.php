<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="<?php echo e(Request::is('/') ? 'active' : ''); ?>"><a href="/">ホーム</a></li>
          <li class="<?php echo e(Request::is('payment/create') ? 'active' : ''); ?>">&nbsp;<a href="payment/create">入金登録</a></li>
          <li class="<?php echo e(Request::is('target/create') ? 'active' : ''); ?>">&nbsp;<a href="target/create">目標金額設定</a></li>
        </ul>
    </div>
  </div>
</nav>