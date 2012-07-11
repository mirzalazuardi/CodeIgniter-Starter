<?php
$user = $this->user;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  	<title><?=$title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv='expires' content='1200' />
	<meta http-equiv='content-language' content='es' />

	<base href="<?php echo $this->config->item('base_url') ?>/public/" />
	
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/bstyles.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/smoothness/jquery-ui-1.8.21.custom.css" type="text/css" media="screen" />

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.8.21.custom.min.js" type="text/javascript"></script>
	<script src="js/jquery.blockUI.js" type="text/javascript"></script>
	<script src="js/sortertables.js" type="text/javascript"></script>
	<script src="js/ckeditor/ckeditor.js" type="text/javascript"></script>

	<script>
		$(function() {$('#examples').accordion({autoHeight: false,navigation: true, collapsible:true, active:false});});
	</script>


	<script>
	
		loadImage = new Image();
		loadImage.src = "<?php echo $this->config->item('base_url') ?>/public/img/admin/ajax-loader.gif";
					
		$(document).ready(function() { 

		    $('#submit').click(function() { 

			$.blockUI({ 
				message: "<div class=ajaxloader_text><?=lang('web_wait')?></div>",
				timeout: 120000
			}); 	
		    
		    }); 
		});

	</script> 

	<style>
		.ui-widget-content{font-size:12px;}
		.ui-state-highlight{height:100%;}
	</style>
	
</head>

<body>

	<div id='bcontainer'>

		<div id="bheader">

			<div id="btop">

			  <h1><a href="#"><?=$this->config->item('site_title');?></a></h1>
			  <p id="userbox"><?=lang('web_hello')?> <strong><?=$user->first_name?> <?=$user->last_name?></strong> &nbsp;| &nbsp;<a href="/auth/edit/<?=$user->id?>"><?=lang('web_my_account')?></a> &nbsp;|&nbsp; <a href='/scaffolds/scaffolds/create'>Scaffolds</a> &nbsp;|&nbsp;<a href="/logout"><?=lang('web_logout')?></a> <br>

			  <span class="clearFix">&nbsp;</span>

			</div>

			<ul id="bmenu">

				<?php $this->load->view('partials/_menu');?>

			</ul>


	      	<span class="clearFix">&nbsp;</span>

	    </div>	


	    <div id="bcontent">

			<?php $this->load->view("partials/_flashdata");?>
		
			<?=$body?>

			

		</div>



	</div>



	<div id="bfooter-wrap">

		<div id="bfooter">

	        <div id="bfooter-top">

	        	<div class="align-left">
		            <h4>Dashboard</h4>
		            <p><a href="#">Dasboard Sub 1</a> | <a href="#">Dasboard Sub 2</a> | <a href="#">Dasboard Sub 3</a></p>
	        	</div>

	            <div class="align-right">
	            	<h2><a href="#"><?=$this->config->item('site_title');?></a></h2>
	            </div>

	            <span class="clearFix"></span>
	            
	        </div><!-- end of div#footer-top -->
	        
	        <div id="bfooter-bottom">
	        	<p>&copy; 2009 Cleanity. Theme by Onur Oztaskiran of <a href="http://www.monofactor.com">Monofactor</a>, 
	            via <a href="http://themeforest.net">Themeforest</a></p>
    		</div>

		</div>

	</div>


	
</body>

</html>