<?php $__env->startSection('content'); ?>
  <h1>入金一覧</h1>
    <?php if(count($payments) > 0): ?>
      <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="well">
          <h3><a href="payment/<?php echo e($payment->id); ?>"><?php echo e($payment->id); ?></a>&nbsp;
          <span><?php echo e($payment->payment); ?>円</span>&nbsp;
          <span class="badge badge-success"><?php echo e($payment->due); ?></span>
          <?php echo e($payment->created_at->format('Y/m/d')); ?></h3>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>