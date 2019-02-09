<?php $__env->startSection('content'); ?>
  <a class="btn btn-default" href="/">戻る</a>
  <h1>入金詳細</h1>
  <h2><div class="badge badge-success"><?php echo e($payment->due); ?></div>&nbsp;<?php echo e($payment->payment); ?>円</h2>
  <div>登録日:<?php echo e($payment->created_at); ?></div>
  <br>
  <?php if(Auth::check()): ?>
    <a href="/payment/<?php echo e($payment->id); ?>/edit" class="btn btn-default">編集画面へ</a>
    <?php echo Form::open(['action' => ['PaymentsController@destroy', $payment->id], 'method' => 'POST', 'class' => 'float-right', 'onsubmit' => 'return confirm("本当に削除しますか?")']); ?>

      <?php echo e(Form::hidden('_method', 'DELETE')); ?>

      <?php echo e(Form::bsSubmit('削除', ['class' => 'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>