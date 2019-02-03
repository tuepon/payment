<?php $__env->startSection('content'); ?>
  <h1>目標金額</h1>
  <?php if($target->target_amount > 0): ?>
    <h2><?php echo e($target->target_amount); ?>円</h2>
  <?php else: ?>
    <p>金額を設定してください。</p>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>