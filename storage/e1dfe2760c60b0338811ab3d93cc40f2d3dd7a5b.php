<?php $__env->startSection('content'); ?>
<h1>サイトについて</h1>
  <p>こんにちは。制作者の上野智範です。ご覧いただきありがとうございます。</p>
<h2>仕様</h2>
  <ul>
    <li>Google App Engineにて稼働</li>
    <li>PHP7.1/Laravel 5.7/MySQL 5.x/Bootstrap4</li>
  </ul>

<h2>今後の機能追加予定</h2>
  <ul>
    <li>ログイン</li>
    <li>出金処理のトランザクション</li>
  </ul>

<h2>GitHub</h2>
  <a href="https://github.com/tuepon">Tomonori Ueno</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>