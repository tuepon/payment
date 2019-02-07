<?php $__env->startSection('content'); ?>
  <h1>目標金額</h1>
  <?php if(count($target) > 0): ?>
    <?php $__currentLoopData = $target; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><a href="target/<?php echo e($t->id); ?>"><?php echo e($t->id); ?></a>:&nbsp;<?php echo e($t->target_amount); ?>円</h2>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>