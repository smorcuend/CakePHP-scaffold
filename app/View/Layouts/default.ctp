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

$cakeDescription = "Empty HTML5 Web";

echo $this->Html->docType('html5');
?>

<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription; ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->meta('keywords','keywords');
		echo $this->Html->meta('description',"Description");
		echo $this->Html->meta('author',"Author");

		echo $this->Html->css('style');
		echo $this->Html->script('jquery-1.8.2.min.js');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
</head>

<body>
	<div id="wrapper">
		<header id="header">

			<div id="logo">Logo</div>

			<nav id="mainmenu">

				<ul id="nav">

					<li class="current">
						<?php 
						echo $this->Html->link('Home',
							array( 'controller' => 'pages', 'action' => 'home'),
							array( 'update' => '#content', 'htmlAttributes' => array())
						);
						?>
					</li>
					<li>
						<?php
						echo $this->Js->link('Item2',
							array( 'controller' => 'pages', 'action' => 'item2'),
							array( 'update' => '#content','htmlAttributes' => array())
						);
						?>
					</li>
		   
				</ul>
				
			</nav>
		
		</header>
		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
		</div>
		
		<footer id="footer">
  			<p> HTML5 WEB TEMPLATE BASED ON CAKEPHP <?php echo Configure::version(); ?></p>
			<p><?php echo date('Y') ?> Designed by smorcuend</p>
		</footer>
		
	</div>

	<script type="text/javascript"></script>

	<?php echo $this->element('sql_dump'); ?>
	<?php echo $this->Js->writeBuffer(); // Write cached scripts ?>
</body>
</html>
