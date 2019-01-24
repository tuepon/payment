<?php $__env->startSection('content'); ?>
  <a class="btn btn-default" href="/payment/<?php echo e($payment->id); ?>">戻る</a>
  <h1>編集画面</h1>
	<?php echo Form::open(['action' => ['PaymentsController@update', $payment->id], 'method' => 'POST']); ?>

		<?php echo e(Form::bsText('payment', $payment->payment)); ?>

		<?php echo e(Form::bsText('due', $payment->due)); ?>

    <?php echo e(Form::hidden('_method', 'PUT')); ?>

		<?php echo e(Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])); ?>

	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>