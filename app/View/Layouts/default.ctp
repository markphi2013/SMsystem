<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 *

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo 'SMsystem' ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
		    'cake.generic',
		    'basic',
		    'admin',
		    'jquery-ui/jquery-ui-1.10.3.custom.min',
		    'superfish/superfish-1.7.4',
		    'superfish/superfish-vertical-1.7.4',
		    'superfish/megafish-1.7.4',
		    'chosen/chosen-1.0.min',
		    'handsontable/jquery.handsontable-0.9.18.full',
		    'jstree/style.min'
		    ));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script>
    <?php echo $this->element('localization');?>
    </script>
	<?php
    if (isset($this->Js)) {
    		//disappear success flash messages
    		$this->Js->get('document')->event('ready', '
    				$("[class*=success]").delay(5000).fadeOut(1000);
    				');
    }
	?>
	<?php
	    echo $this->Html->meta(array('name'=>'robots', 'content'=> 'noindex'));
	?>	
</head>
<body>
	<div id="container">
	    <div id="header">	    
	        <div class="ttc-left-header">
		        <?php 
		        echo $this->Html->image('vusion-logo-wide.png', array(
		        		'url' => array('controller'=> 'programs', 'action'=>'index')
		        		));
			    ?> 
			</div>			
			<div class="ttc-right-header"> 
			<?php
			if ($this->Session->read('Auth.User.id')) {	
					echo $this->Html->tag(
							'span', 
							__('log as %s', $this->Session->read('Auth.User.username'))
							);
			}
			?> 
			</div>
            <div class="ttc-central-header">
			<?php
			/*if ($this->Session->read('Auth.User.id')) {	
			    echo $this->Html->link(
			        __('Logout'),
			        array('controller'=> 'users', 'action'=>'logout'),
			        array('class' => 'ttc-link-header'));
			    
			    
			echo $this->AclLink->generateButton(
			    __('Admin'), null, 'admin', null, array('class'=>'ttc-link-header'));*/
			?>
			</div>
		</div>
		<div id="content" class="height-size">
		    
			<?php
			echo $content_for_layout;
			/*echo $this->Session->flash();*/ ?>

			<?php /*echo $this->fetch('content');*/ ?>
		</div>
		<div id="footer">
			<?php
			echo $this->element('footer');
			/* echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/', 
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);*/
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
