<?php $__env->startSection('content'); ?>
  <a class="btn btn-default" href="/">戻る</a>
  <h1><a href="/payment/<?php echo e($payment->id); ?>"><?php echo e($payment->id); ?></a></h1>
  <h2><?php echo e($payment->payment); ?>円</h2>
  <h3>月度:<div class="badge badge-success"><?php echo e($payment->due); ?></div></h3>
  <div>登録日:<?php echo e($payment->created_at->format('Y/m/d')); ?></div>
  <br>
  <a href="/payment/<?php echo e($payment->id); ?>/edit" class="btn btn-default">編集画面へ</a>
  <?php echo Form::open(['action' => ['PaymentsController@destroy', $payment->id], 'method' => 'POST', 'class' => 'float-right']); ?>

    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

		<?php echo e(Form::bsSubmit('Delete', ['class' => 'btn btn-danger'])); ?>

	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>