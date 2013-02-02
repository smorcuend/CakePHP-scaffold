<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = "PHPBackend Ready2Use";

echo $this->Html->docType('html5');
?>

<html class="no-js" lang="en"><!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-skeleton">
	<?php echo $this->Html->charset(); ?>

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $cakeDescription.' : '.$title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->meta('keywords','keywords');
		echo $this->Html->meta('description',"Description");
		echo $this->Html->meta('author',"Author");

		echo $this->Html->css('style');
		echo $this->Html->script('modernizr.custom-2.6.2.min.js'); // Include Modernizr
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">
	
	<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width-->	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
		 
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	
	
	<!-- Using local fonts? make sure to read up http://www.red-team-design.com/google-font-api-and-typekit-solutions-vs-font-face -->
	<!-- Google Web fonts example: load from Google server. You can use directly in your css -->
	<link href='http://fonts.googleapis.com/css?family=Donegal+One' rel='stylesheet' type='text/css'>
	
</head>

<body>

	<div class="wrapper"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->
		<header>

			<img src="img/html5_skeleton.png" alt="HTML5-SKELETON logo" class="img_title inline">
			<h1 class="inline">PHPBackend Ready2Use</h1>
			<img src="img/html5_skeleton.png" alt="HTML5-SKELETON logo" class="img_title inline">

			<nav>			
				<ul>
					<li class="current">
						<?php 
						echo $this->Html->link('Home', '/'
							//array( 'controller' => 'pages', 'action' => 'home')
							//array( 'update' => '#content', 'htmlAttributes' => array())
						);
						?>
					</li>
					<li>
						<?php
						echo $this->Html->link('Item2','/item2'
							//array( 'controller' => 'pages', 'action' => 'item2')
							//array( 'update' => '#content','htmlAttributes' => array())
						);
						?>
					</li>
					<li>
						<?php
						echo $this->Html->link('Item3','/item3'
							//array( 'controller' => 'pages', 'action' => 'item3')
							//array( 'update' => '#content','htmlAttributes' => array())
						);
						?>
					</li>
					<li>
						<?php
						echo $this->Html->link('Item4','/item4'
							//array( 'controller' => 'pages', 'action' => 'item4')
							//array( 'update' => '#content','htmlAttributes' => array())
						);
						?>
					</li>
				</ul>			
			</nav>
		
		</header>

		<div class="wrapper_content">

			<article id="content">

				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
						
			</article>

			<aside>		
				<h2>Sidebar Content</h2>
				  <nav>
				    <ul>
						<li class="current">
							<?php 
							echo $this->Html->link('Home', '/'
								//array( 'controller' => 'pages', 'action' => 'home')
								//array( 'update' => '#content', 'htmlAttributes' => array())
							);
							?>
						</li>
						<li>
							<?php
							echo $this->Html->link('Item2','/item2'
								//array( 'controller' => 'pages', 'action' => 'item2')
								//array( 'update' => '#content','htmlAttributes' => array())
							);
							?>
						</li>
						<li>
							<?php
							echo $this->Html->link('Item3','/item3'
								//array( 'controller' => 'pages', 'action' => 'item3')
								//array( 'update' => '#content','htmlAttributes' => array())
							);
							?>
						</li>
						<li>
							<?php
							echo $this->Html->link('Item4','/item4'
								//array( 'controller' => 'pages', 'action' => 'item4')
								//array( 'update' => '#content','htmlAttributes' => array())
							);
							?>
						</li>
				    </ul>
				</nav>
			</aside>
			
		</div>
		
		<footer id="footer" class="clearfix">
			<p> BACK-END WEB BASED ON <a href="http://cakephp.org">CakePHP</a> <?php echo Configure::version(); ?></p>		
			<p><small>HTML5 SKELETON <?php echo date('Y') ?> - Designed by <a href="http://smorcuend.es">smorcuend</a> <span style="-moz-transform: scaleX(-1); -o-transform: scaleX(-1); -webkit-transform: scaleX(-1); transform: scaleX(-1); display: inline-block;"> &copy; </span> <span id="copyright_year"></span> - All rights reversed.</small></p>		
		</footer>

		<!--Fork me on Github -->
		<a href="https://github.com/smorcuend/HTML5-SKELETON"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>

	</div><!--wrapper -->

	<!-- here comes the javascript -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.9.0.min.js"><\/script>')</script>

	<!-- this is where we put our custom functions -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-31122385-3']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<?php 
	echo $this->JS->writeBuffer(); // Write cached scripts 
	echo $this->element('sql_dump');
	?>
</body>
</html>
