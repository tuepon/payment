<?php $__env->startSection('content'); ?>

  <a class="btn btn-default" href="/target">戻る</a>
  <h1>目標金額編集</h1>
	<?php echo Form::open(['action' => ['TargetsController@update'], 'method' => 'POST']); ?>

		<?php echo e(Form::bsText('target_amount')); ?>

    <?php echo e(Form::hidden('_method', 'PUT')); ?>

		<?php echo e(Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])); ?>

	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>