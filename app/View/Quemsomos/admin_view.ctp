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
				
				<div class="quemSomos view">
					<h2><?php echo __('Quem Somo'); ?></h2>
					<dl>
						<dt><?php echo __('Id'); ?></dt>
						<dd>
							<?php echo h($quemSomo['QuemSomo']['id']); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Titulo'); ?></dt>
						<dd>
							<?php echo h($quemSomo['QuemSomo']['titulo']); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Conteudo'); ?></dt>
						<dd>
							<?php echo h($quemSomo['QuemSomo']['conteudo']); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Created'); ?></dt>
						<dd>
							<?php echo h($quemSomo['QuemSomo']['created']); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Modified'); ?></dt>
						<dd>
							<?php echo h($quemSomo['QuemSomo']['modified']); ?>
							&nbsp;
						</dd>
					</dl>
				</div>
				<div class="actions">
					<h3><?php echo __('Actions'); ?></h3>
					<ul>
						<li><?php echo $this->Html->link(__('Edit Quem Somo'), array('action' => 'edit', $quemSomo['QuemSomo']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Delete Quem Somo'), array('action' => 'delete', $quemSomo['QuemSomo']['id']), null, __('Are you sure you want to delete # %s?', $quemSomo['QuemSomo']['id'])); ?> </li>
						<li><?php echo $this->Html->link(__('List Quem Somos'), array('action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New Quem Somo'), array('action' => 'add')); ?> </li>
					</ul>
				</div>
			</div>
		</div>
</body>
</html>