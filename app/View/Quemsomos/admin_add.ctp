<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

<title>ForestCP | Administration</title>

<!-- Core Stylesheet -->

<?php echo $this->Html->css(array('assets/css/core', 'assets/css/red'/*, 'assets/css/blue'*/));?>

<!--
<link href="assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />

<link rel="alternate stylesheet" type="text/css" href="assets/css/red.css" title="styles2" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="assets/css/blue.css" title="styles3" media="screen" />
-->

<!-- Javascript Files -->

<?php echo $this->Html->script(array('assets/js/jquery-1.3.2.min', 'assets/js/jquery-ui-1.7.2.custom.min', 'assets/js/hoverIntent', 'assets/js/superfish', 'assets/js/jquery.wysiwyg', 'assets/js/jquery-stylesheetToggle', 'assets/js/forestcp'));?>
<!--
<script type="text/javascript" src="assets/js/jquery-1.3.2.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery-ui-1.7.2.custom.min.js"></script> 
<script type="text/javascript" src="assets/js/hoverIntent.js"></script> 
<script type="text/javascript" src="assets/js/superfish.js"></script> 
<script type="text/javascript" src="assets/js/jquery.wysiwyg.js"></script> 
<script type="text/javascript" src="assets/js/jquery-stylesheetToggle.js"></script> 
<script type="text/javascript" src="assets/js/forestcp.js"></script> 
-->

<!--[if IE 6]>
<link href="assets/css/ie6.css" media="screen" rel="stylesheet" type="text/css" />
<script src="assets/js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>
  /* EXAMPLE */
  DD_belatedPNG.fix('.logo img, .message, table img');
  
  /* string argument can be any CSS selector */
</script>
<![endif]-->

</head>
<body>
	<!-- Dialogs -->
	<div id="welcome" style="display: none" title="Welcome to ForestCP">
		<p>ForestCP is an great and easy to customize backend administration user interface.</p>
	</div>


	<!-- Start Header -->
	<div id="header">
		
		<!-- Start Logo -->
		<div class="logo">
			<a href="#">
				<?php echo $this->Html->image('logo2.png', array('alt' => 'logo', 'width' => '110'));?>
				
			</a>
		</div>
		<!-- End Logo -->
		
		<!-- Start Info -->
		<div class="info">
			<div>
				<h2>Welcome back <span>Philo</span></h2>
				<small>Today is November 15, 2009 17:24</small>
				<small><a href="#">View Website</a> | <a href="#">View Latest Activity</a></small>
			</div>
		</div>
		<!-- End Info -->
	</div>
	<!-- End Header -->
	
	<!-- Start Top Navigation -->
	<div id="top_nav">
		<!-- Start Drop Down Menu -->
		<ul class="sf-menu">
			<li>
				<?php echo $this->Html->link('Home', '/admin', array('escape' => false)); ?>
			</li>
			<li>
				<?php echo $this->Html->link('Quem Somos', '/admin/quemsomos', array('escape' => false)); ?>
			</li>

		</ul>
		<!-- End Drop Down Menu -->
	</div>
	<!-- End Top Navigation -->
		
		<!-- Start Wrap -->
		<div id="wrap" class="fixed">
			<div id="content">
				
				<div class="quemSomos form admin-pages">
				<?php echo $this->Form->create('QuemSomo'); ?>
					<fieldset>
						<h1><?php echo __('Adicionar Quem Somos'); ?></h1>
					<?php
						echo $this->Form->input('titulo', array('class' => 'txt-input small'));
						echo $this->Form->input('conteudo', array('class' => 'textarea-input large', 'id' => 'wysiwyg'));
					?>
					</fieldset>
				<?php echo $this->Form->end(__('Submit')); ?>
				</div>
				<div class="actions admin-pages">
					<h3><?php echo __('Ações'); ?></h3>
					<ul>

						<li><?php echo $this->Html->link(__('Quem Somos'), array('action' => 'index')); ?></li>
					</ul>
				</div>
			</div>
		</div>
</body>
</html>