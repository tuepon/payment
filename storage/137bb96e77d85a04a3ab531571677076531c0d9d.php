<?php $__env->startSection('content'); ?>
  <h1>入金一覧</h1>
    <p>子どもの学費積立記録です。</p>
    <h2>現在の金額:&nbsp;<div class="badge badge-success"><?php echo e($payments->sum('payment')); ?>円</div></h2>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>月度</th>
        <th>金額</th>
        <th>登録日</th>
        <th>ID</th>
      </tr>
    </thead>
    <tbody>
          <tr>
            <?php if(count($payments) > 0): ?>
              <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($p->due); ?></td>
                <td><?php echo e($p->payment); ?>円</td>
                <td><?php echo e($p->created_at->format('Y/m/d')); ?></td>
                <td><a href="payment/<?php echo e($p->id); ?>"><?php echo e($p->id); ?></a></td>
          </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>