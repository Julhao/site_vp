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
					<a class="m" href="#a">Dashboard</a>
					<ul>
						<li>
							<a href="#aa">Recent Activity</a>
						</li>
						<li>
							<a href="#ab">Manage Settings</a>
							<ul>
								<li class="current"><a href="#">Server Settings</a></li>
								<li><a href="#aba">Application Settings</a></li>
								<li><a href="#abb">Image Settings</a></li>
								<li><a href="#abc">Upload Settings</a></li>
								<li><a href="#abd">Contact Settings</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Manage Articles</a>
							<ul>
								<li><a href="#">Create Article</a></li>
								<li><a href="#">Edit Article</a></li>
								<li><a href="#">Delete Article</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Manage Ads</a>
							<ul>
								<li><a href="#">Add Advertiser</a></li>
								<li><a href="#">View Statistics</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a class="m" href="#">Articles</a>
				</li>
				<li>
					<a class="m" href="#a">Reports</a>
					<ul>
						<li>
							<a href="#aa">Manage Reports</a>
						</li>
						<li>
							<a href="#aa">Create Report</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="m" href="#">Statistics</a>
				</li>
				<li>
					<a class="m" href="#">Users</a>
				</li>	
				<li>
					<a class="m" href="#">Accounts</a>
				</li>
			</ul>
			<!-- End Drop Down Menu -->
		</div>
		<!-- End Top Navigation -->
		
		<!-- Start Wrap -->
		<div id="wrap" class="fixed">
			<div id="content">
				<div class="inner">
				
					<noscript> 
						<!-- Show message when javascript is not enabled -->
						<div class="message error">
				    		    <p>Javascript is needed for this template to work properly. <br />Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.</p>
				    		</div>	
					</noscript>

				
					<!-- Start Message -->
					<div class="message">
				    	<h3>Welcome!</h3>
				    	<p><b>ForestCP</b> is an <b>great</b> and easy to customize <b>backend administration user interface.</b></p>
				    </div>
				    <!-- End Message -->
				    
				    <!-- Start Content Box #1 -->
				    <div class="title"><h3>Administration Options</h3></div>
				    <div class="box">
				    	<div class="txt">
				    		<ul class="icon_list">
				    			<li>
				    				<p><?php echo $this->Html->image('assets/img/content/icon_list/activity.jpg', array('alt' => ''));?>
				    				
				    				<a href="#">Watch Activity</a></p>
				    			</li>
				    			<li>
				    				<p><?php echo $this->Html->image('assets/img/content/icon_list/add_product.jpg', array('alt' => ''));?>
				    				<a href="#">Add Product</a></p>
				    			</li>
				    			<li>
				    				<p><?php echo $this->Html->image('assets/img/content/icon_list/stats.jpg', array('alt' => ''));?>
				    				<a href="#">View Statistics</a></p>
				    			</li>
				    			<li>
				    				<p><?php echo $this->Html->image('assets/img/content/icon_list/comments.jpg', array('alt' => ''));?>
				    				<a href="#" id="dialog">View Dialog</a></p>
				    			</li>
				    			<li>
				    				<p>
				    					<?php echo $this->Html->image('assets/img/content/icon_list/mail.jpg', array('alt' => ''));?>
				    				<a href="#">View Mail</a></p>
				    			</li>
				    		</ul>
				    		<div class="clear"></div>
				    	</div>
				    </div>
				    <!-- End Content Box #1 -->
				    
				    <!-- Start Content Box #2 -->
				    <div class="title">
				    
				    	<h3>Content Box</h3> 
				    
				    	<div class="selector" title="content_box">
				    		<a class="tab active" href="tab-table">Table</a> 
				    		<a class="tab" href="tab-forms">Forms</a>
				    	</div>
				    </div>
				    <div class="box">
				    	<div class="txt">
							
							<div id="content_box">
								<div class="tab-table">

									<!-- Start Message -->
									<div class="message warning">
				    					<p>This is an content box, you can place anything you want here. Just click this message to get it out of the way!</p>
				    				</div>	
									<!-- End Message -->
									
				    				<!-- Start Table -->
				    				<table cellpadding="0" cellspacing="0">
				    					<thead>
				    						<tr>
				    							<th><input type="checkbox" name="check" /></th>
				    							<th>Column 1</th>
				    							<th>Column 2</th>
				    							<th>Column 3</th>
				    							<th>Column 4</th>
				    							<th>Column 5</th>
				    						</tr>
				    					</thead>
				    					<tbody>
				    						<tr>
				    							<td><input type="checkbox" name="check" /></td>
				    							<td>John Doe</td>
				    							<td><a href="#">Lorem ipsum donec interdum</a></td>
				    							<td>Account Activated</td>
				    							<td>Ut enim ad minim veniam</td>
				    							<td>
				    								<a href="#"><img src="assets/img/global/icons/info.png" alt="Info"/></a>
				    								<a href="#"><img src="assets/img/global/icons/stats.png" alt="Stats"/></a>
				    								<a href="#"><img src="assets/img/global/icons/delete.png" alt="Delete"/></a>
				    							</td>
				    						</tr>
				    						<tr>
				    							<td><input type="checkbox" name="check" /></td>
				    							<td>John Doe</td>
				    							<td><a href="#">Lorem ipsum donec interdum</a></td>
				    							<td>Account Activated</td>
				    							<td>Ut enim ad minim veniam</td>
				    							<td>
				    								<a href="#"><img src="assets/img/global/icons/info.png" alt="Info"/></a>
				    								<a href="#"><img src="assets/img/global/icons/stats.png" alt="Stats"/></a>
				    								<a href="#"><img src="assets/img/global/icons/delete.png" alt="Delete"/></a>
				    							</td>
				    						</tr>
				    						<tr>
				    							<td><input type="checkbox" name="check" /></td>
				    							<td>John Doe</td>
				    							<td><a href="#">Lorem ipsum donec interdum</a></td>
				    							<td>Account Activated</td>
				    							<td>Ut enim ad minim veniam</td>
				    							<td>
				    								<a href="#"><img src="assets/img/global/icons/info.png" alt="Info"/></a>
				    								<a href="#"><img src="assets/img/global/icons/stats.png" alt="Stats"/></a>
				    								<a href="#"><img src="assets/img/global/icons/delete.png" alt="Delete"/></a>
				    							</td>
				    						</tr>
				    						<tr>
				    							<td><input type="checkbox" name="check" /></td>
				    							<td>John Doe</td>
				    							<td><a href="#">Lorem ipsum donec interdum</a></td>
				    							<td>Account Activated</td>
				    							<td>Ut enim ad minim veniam</td>
				    							<td>
				    								<a href="#"><img src="assets/img/global/icons/info.png" alt="Info"/></a>
				    								<a href="#"><img src="assets/img/global/icons/stats.png" alt="Stats"/></a>
				    								<a href="#"><img src="assets/img/global/icons/delete.png" alt="Delete"/></a>
				    							</td>
				    						</tr>
				    					</tbody>
				    				</table>
				    				<!-- End Table -->		
				    				
								</div>
								<div class="tab-forms">
									
									<!-- Start Form -->
									<form method="post" action="">
										<fieldset>
											<p><label>Small Field</label>
											<input type="text" class="txt-input small" />
											<small>A short description can be added</small></p>
											
											
											<p><label>Medium Field</label>
											<input type="text" class="txt-input medium" /></p>
											
											<p><label>Large Field</label>
											<input type="text" class="txt-input large" /></p>
											
											<p><label>Checkboxes</label>
											<input type="checkbox" /> This is Checkbox #1
											<input type="checkbox" /> This is Checkbox #2</p>
											
											<p><label>Radio Buttons</label>
											<input type="radio" name="radio" /> Radio Button <br />
											<input type="radio" name="radio" /> Another Radio Button</p>
											
											<p><label>Dropdown Menu</label>
											<select class="select-input small">
												<option>This is Option 1</option>
												<option>This is Option 2</option>
												<option>This is Option 3</option>
											</select></p>
											
											<textarea id="wysiwyg" rows="10" cols="10" class="textarea-input large"></textarea>
										</fieldset>
										
									</form>
									<!-- End Form -->
								</div>
							</div>
							
				    	</div>
				    </div>
				    <!-- End Content Box #2 -->
				    
				    <!-- Start Content Box #3 -->
				    <div class="title"><h3>Notifications</h3></div>
				    <div class="box">
				    	<div class="txt">
							<p>The following notifications come with this template! <small>(click to hide an notification)</small></p>
							<!-- Start Message -->
							<div class="message warning">
				    		    <p>Warning Message, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				    		</div>	
				    		<div class="message info">
				    		    <p>Information Message, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				    		</div>	
				    		<div class="message success">
				    		    <p>Success Message, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				    		</div>	
				    		<div class="message error">
				    		    <p>Error Message, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				    		</div>	
							<!-- End Message -->
							
				    	</div>
				    </div>
				    <!-- End Content Box #3 -->
				    
				</div>
			</div>

			<!-- Start Sidebar -->
			<div id="sidebar">
			    
			    <!-- Start Sidebar Box #1 -->
			    <div class="sort">
			    <div class="title"><h3>Quick Links</h3></div>
			    	<div class="box">
			    		<div class="txt">
					    	<ul>
					    		<li><a href="#">Manage Users</a></li>
					    		<li><a href="#">Manage Articles</a></li>
					    		<li><a href="#">View System Statistics</a></li>
					    		<li><a href="#">View Bandwidth Usage</a></li>
					    		<li>Switch to <a href="#" rel="styles1" class="styleswitch"><b>Green</b></a> |  
					    		<a href="#" rel="styles2" class="styleswitch"><b>Red</b></a> | 
					    		<a href="#" rel="styles3" class="styleswitch"><b>Blue</b></a></li>
					    		<li><a href="#" id="switch-layout"><b>Switch between Fixed &amp; Fluid</b></a></li>
					    	</ul>
					    </div>
			    	</div>
			    </div>
			    <!-- End Sidebar Box #1 -->
			    
			    <!-- Start Sidebar Box #2 -->
			    <div class="sort">
			    	<div class="title"><h3>To Do List</h3></div>
			    	<div class="box">
			    		<div class="txt">
					    	<ul class="todo">
					    		<li>
					    			<a href="#"><b>View Pending Comments</b></a>
					    			<p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. 
					    			Vivamus tellus metus, mattis eget pharetra eu, consectetur sed orci.</p>
					    			
					    			<ul class="links">
					    				<li><a href="#">Get Started</a></li>
					    				<li><a href="#">Mark As Done</a></li>
					    			</ul>
					    		</li>
					    		
					    		<li>
					    			<a href="#"><b>View Pending Comments</b></a>
					    			<p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. 
					    			Vivamus tellus metus, mattis eget pharetra eu, consectetur sed orci.</p>
					    			
					    			<ul class="links">
					    				<li><a href="#">Get Started</a></li>
					    				<li><a href="#">Mark As Done</a></li>
					    			</ul>
					    		</li>
					    	</ul>
					    </div>
			    	</div>
			    </div>
			    <!-- End Sidebar Box #2 -->
			    
			    <!-- Start Sidebar #3 -->
			     <div class="sort">
			   	 <div class="title"><h3>Calendar</h3></div>
			   	 <div class="box">
			   	 	<div class="txt">
			   	 		<div id="datepicker"></div>
			   	 	</div>
			   	 </div>
			   	</div>
			    <!-- End Sidebar Box #3 -->
			    
			</div>
			<!-- End Sidebar -->
			
		</div> 
		<!-- End Wrap -->
</body>
</html>