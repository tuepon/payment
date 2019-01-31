<?php $__env->startSection('content'); ?>
  <h1>金額設定</h1>
    <h2><?php echo e($target->target_amount); ?>円</h2>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>