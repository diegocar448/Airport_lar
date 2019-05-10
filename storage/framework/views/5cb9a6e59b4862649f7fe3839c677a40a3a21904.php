<!DOCTYPE html>
<html>
	<head>
		<title><?php echo e($title ?? 'Painel EspecializaTI'); ?></title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!--Fonts-->
		<link rel="stylesheet" href="<?php echo e(url('assets/panel/css/font-awesome.css')); ?>">


		<!--CSS Person-->
		<link rel="stylesheet" href="<?php echo e(url('assets/panel/css/especializati.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(url('assets/panel/css/especializati-reset.css')); ?>">

		<!--Favicon-->
		<link rel="icon" type="image/png" href="<?php echo e(url('assets/panel/imgs/favicon.png')); ?>">
	</head>
<body>

<section class="menu">
	
	<div class="logo">
		<img src="<?php echo e(url('assets/panel/imgs/icone-especializati.png')); ?>" alt="EspecializaTi" class="logo-painel">
	</div>

	<div class="list-menu">
		<ul class="menu-list">
			<li>
				<a href="?pag=home">
					<i class="fa fa-home" aria-hidden="true"></i>
					Home
				</a>
			</li>

			<li>
				<a href="<?php echo e(route('brands.index')); ?>">
					<i class="fa fa-university"></i>
					Marcas
				</a>
			</li>

			<li>
				<a href="<?php echo e(route('planes.index')); ?>">
					<i class="fa fa-plane"></i>
					Aviões
				</a>
			</li>

			<li>
				<a href="<?php echo e(route('states.index')); ?>">
					<i class="fa fa-globe"></i>
					Estados
				</a>
			</li>
			<li>
				<a href="<?php echo e(route('flights.index')); ?>">
					<i class="fa fa-fighter-jet"></i>
					Voos
				</a>
			</li>

			<li>
				<a href="<?php echo e(route('users.index')); ?>">
					<i class="fa fa-users"></i>
					Usuários
				</a>
			</li>
			
		</ul>
	</div>

</section><!--End Menu-->

<section class="content">
	<div class="top-dashboard">
		
		<div class="dropdown user-dash">
		  <div class="dropdown-toggle" id="dropDownCuston" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    <img src="<?php echo e(url('assets/panel/imgs/user-carlos-ferreira.png')); ?>" alt="Carlos Ferreira" class="user-dashboard img-circle">
		    <p class="user-name">Nome User</p>
		    <span class="caret"></span>
		  </div>
		  <ul class="dropdown-menu dp-menu" aria-labelledby="dropDownCuston">
		    <li><a href="#">Perfil</a></li>
		    <li><a href="#">Logout</a></li>
		  </ul>
		</div>
	</div><!--Top Dashboard-->

	<div class="content-ds">
		
		

		
		<?php echo $__env->yieldContent('content'); ?>


	</div><!--End Content DS-->

</section><!--End Content-->

	

	<!--jQuery-->
	<script src="<?php echo e(url('assets/panel/js/jquery-3.1.1.min.js')); ?>"></script>

	<!-- jS Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH /var/www/laravel58/resources/views/panel/layouts/app.blade.php ENDPATH**/ ?>