<?php $__env->startSection('content'); ?>
  <a class="btn btn-default" href="/target/<?php echo e($target->id); ?>">戻る</a>
  <h1>目標金額編集</h1>
	<?php echo Form::open(['action' => ['TargetsController@update', $target->id], 'method' => 'POST']); ?>

		<?php echo e(Form::bsText('target', $target->target_amount)); ?>

    <?php echo e(Form::hidden('_method', 'PUT')); ?>

		<?php echo e(Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])); ?>

	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>