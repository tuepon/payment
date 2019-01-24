<?php $__env->startSection('content'); ?>
  <h1>入金登録</h1>
	<?php echo Form::open(['action' => 'PaymentsController@store', 'method' => 'POST']); ?>

		<?php echo e(csrf_field()); ?>

		<?php echo e(Form::bsText('payment')); ?>

		<?php echo e(Form::bsText('due')); ?>

		<?php echo e(Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])); ?>

	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>