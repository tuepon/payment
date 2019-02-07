<?php $__env->startSection('content'); ?>
  <a class="btn btn-default" href="/">戻る</a>
  <h1>設定金額</h1>
  <h2><div class="badge badge-success"><?php echo e($target->target_amount); ?>円</div></h2>
  <div>登録日:<?php echo e($target->created_at); ?></div>
  <br>
  <a href="/target/<?php echo e($target); ?>/edit" class="btn btn-default">編集画面へ</a>
  <?php echo Form::open(['action' => ['TargetsController@destroy', $target], 'method' => 'POST', 'class' => 'float-right', 'onsubmit' => 'return confirm("本当に削除しますか?")']); ?>

    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

		<?php echo e(Form::bsSubmit('削除', ['class' => 'btn btn-danger'])); ?>

	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>