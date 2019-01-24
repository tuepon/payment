<?php $__env->startSection('content'); ?>
  <h1>入金一覧</h1>
  <p>子どもの学費積立記録です。</p>
    <?php if(count($payments) > 0): ?>
      <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>月度</th>
            <th>金額</th>
            <th>ID</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo e($payment->due); ?></td>
            <td><?php echo e($payment->payment); ?>円</td>
            <td><a href="payment/<?php echo e($payment->id); ?>"><?php echo e($payment->id); ?></a></td>
          </tr>
        </tbody>
      </table>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>