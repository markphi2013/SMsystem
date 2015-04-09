<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php echo 'SMsystem' ?>
	</title>
	<?php
        echo $this->Html->meta('icon');
        echo $this->Html->charset();
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
		echo $this->Html->script('jquery-1.10.2.min.js');
		echo $this->Html->script('jqueryui/js/jquery-ui-1.10.3.custom.min.js');
		echo $this->Html->script('jqueryui/js/jquery-ui-timepicker-addon.js');
        ## nav menu
		echo $this->Html->script('superfish-1.7.4/superfish.min.js');
		echo $this->Html->script('superfish-1.7.4/hoverIntent.js');
		echo $this->Html->script('superfish-1.7.4/supersubs.js');
		## general
		echo $this->Html->script('datejs/date.js');
		echo $this->Html->script('xregexp-2.0.0/xregexp-all.js');
		echo $this->Html->script('moment.js');
		echo $this->Html->script('chosen-1.0.jquery.min.js');
		## home brewed javascript
		echo $this->Html->script('ttc-dynamic-form-structure.js');
		echo $this->Html->script('ttc-generic-program.js');
		echo $this->Html->script('ttc-utils.js');
		echo $this->Html->script('counter.js');
		echo $this->Html->script('screen.js');
		echo $scripts_for_layout;
		
        //echo $this->fetch('meta');
       // echo $this->fetch('css');
        //echo $this->fetch('script');
        if (isset($this->Js)) {
            //disappear success flash messages
            $this->Js->get('document')->event('ready', '
                $("[class*=success]").delay(5000).fadeOut(1000);
                ');
        }
	  echo $this->Html->meta(array('name'=>'robots', 'content'=> 'noindex'));
	?>	
</head>
<body>
	<div id="container">
	    <div class="status-message">
		    <?php
		    echo $this->element('status_message'); 
		   // echo $this->Session->flash();
		    ?>
		</div>
	    <div id="header">	    
	        <div class="ttc-left-header">
		        <?php 
		        /*echo $this->Html->image('vusion-logo-wide.png', array(
		        		'url' => array('controller'=> 'programs', 'action'=>'index')
		        		));*/
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
			if ($this->Session->read('Auth.User.id')) {	
			    echo $this->Html->link(
			        __('Logout'),
			        array('controller'=> 'users', 'action'=>'logout'),
			        array('class' => 'ttc-link-header'));
			   } 
			    
			/*echo $this->AclLink->generateButton(
			    __('Admin'), null, 'admin', null, array('class'=>'ttc-link-header'));*/
			?>
			</div>
		</div>
		<div id="content" class="height-size">
			<?php
			//echo "</div>";
            //echo "<div class='program-body'>";
			echo $content_for_layout;
			//echo $this->Session->flash();
			
			//echo "</div>"; 
			?>

			<?php /*echo $this->fetch('content');*/ ?>
		</div>
	</div>
	<div id="footer">
        <?php
            //echo $this->element('footer');
            /* echo $this->Html->link(
            $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
            'http://www.cakephp.org/', 
            array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
            );*/
        ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
