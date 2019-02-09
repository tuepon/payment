<!DOCTYPE html>
<head>
    <html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <a class="navbar-brand" href="#">Payment</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="<?php echo e(Request::is('/') ? 'active' : ''); ?>"><a href="/">ホーム</a></li>
          <li class="<?php echo e(Request::is('about') ? 'active' : ''); ?>">&nbsp;<a href="/about">サイトについて</a></li>
          <?php if(auth()->guard()->check()): ?>
            <li class="<?php echo e(Request::is('/dashboard') ? 'active' : ''); ?>">&nbsp;<a href="/dashboard">Dashboard</a></li>            
          <?php endif; ?>
          </div>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                    </li>
<!--                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    </li>
 -->
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </ul>
    </div>
  </div>
</nav>