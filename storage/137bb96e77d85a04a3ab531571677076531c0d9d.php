<?php $__env->startSection('content'); ?>
  <h1>入金一覧</h1>
    <p>大学生の子の学費積立メモアプリです。</p>
  <h2>目標金額:&nbsp;
    <?php if(count($targets) > 0): ?>
      <?php $__currentLoopData = $targets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $target): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo e($target->target_amount); ?>円&nbsp;
        <?php if( Auth::check() ): ?>
          <button class="primary"><a href="/target/<?php echo e($target->id); ?>/edit">編集</a></button></h2>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <h2>入金総額:&nbsp;<div class="badge badge-success"><?php echo e($payments->sum('payment')); ?>円</div></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>月度</th>
        <th>金額</th>
        <th>登録日</th>
        <th>詳細</th>
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