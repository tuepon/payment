<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                    <ul>
                        <li class="<?php echo e(Request::is('payment/create') ? 'active' : ''); ?>">&nbsp;<a href="/payment/create">入金登録</a></li>
                        <li class="<?php echo e(Request::is('target/create') ? 'active' : ''); ?>">&nbsp;<a href="/target/create">目標金額設定</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>