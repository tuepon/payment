<?php $__env->startSection('content'); ?>
  <h1>目標金額設定</h1>
	<?php echo Form::open(['action' => 'TargetsController@store', 'method' => 'POST']); ?>

		<?php echo e(csrf_field()); ?>

		<?php echo e(Form::bsText('target_amount')); ?>

		<?php echo e(Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])); ?>

	<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>