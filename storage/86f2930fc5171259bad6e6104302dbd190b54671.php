<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Payment</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
	   <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	   <div class="container">
			<?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->yieldContent('content'); ?>
		</div>

		<footer id="footer" class="text-center">
			<p>Copyright &copy; 2019 Payment</p>
		</footer>
	</body>
</html>