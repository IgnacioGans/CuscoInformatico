<!DOCTYPE html>
<html lang="<?php _e("[:es]es[:en]en[:pb]pt[:]") ?>">
<head>
	<title><?php bloginfo('title'); ?></title>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('url')?>/wp-content/uploads/leading-logo.png">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bicon.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/leading.css">
	<link rel="stylesheet" type="text/css" media="(max-width: 640px)" href="<?php bloginfo('template_directory'); ?>/responsive.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/datepicker.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jvectormap.peru.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/booking.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
	<style>
		.menu-tours ul li ul.sub-menu li a{
			font-size:13px!important;
		}
		.menu-tours ul li:hover ul.sub-menu {
			width: 1036px;
		}

		.menu-tours ul li ul.sub-menu li:last-child{
			display:flex;
		}
		/*.menu-tours ul li ul.sub-menu li:nth-last-child(1):nth-child(even){
			color:blue;
		}*/
		.menu-tours ul li ul.sub-menu li:nth-last-child(1):nth-child(odd){
			flex-basis:100%;
		}
	</style>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

<header class="header container-fluid">
	<div class="header-top row">
		<div class="header-top-item col-md-5 text-md-left">
			<?php _e("[:es]Los mejores tours en el Perú[:en]The best tours in Peru[:pb]Os melhores passeios no Peru[:]");?>			 
		</div>
		<div class="header-top-item  col-md-7 text-md-right">
			<nav class="menu-primary">
				<?php wp_nav_menu(array('menu' => 'local')); ?>
			</nav>
		</div>
	</div>
	<div class="header-content container">
		<div class="row" style="display: flex;align-items: center">
			<div class="col-md-3">
				<figure class="header-logo">
					<a href="<?php bloginfo('url') ?>">
					<img src="https://leadingperutravel.com/wp-content/uploads/leading-logo.png" alt="The best tours in Peru and South America: Leading Peru Travel"></a>
				</figure>
			</div>
			<div class="col-md-4 text-md-center">
				<h2 style="font-size: 1.4rem;color: #ff7f42;font-family: 'Roboto',sans-serif;font-weight: 700;"><?php _e("[:es]Los mejores paquetes turísticos en Perú y Sudamérica.[:en]The best tourist packages in Peru and South America.[:pb]Os melhores pacotes turísticos no Peru e na América do Sul.[:]");?></h2>
			</div>
			<div class="col-md-5 text-md-right" style="font-size: .9rem">
				<aside class="header-social">
					<span><a href="https://www.facebook.com/Peruviajesmachupicchu/" target="_blank" title="Our Facebook"><i class="fa fa-facebook"  style="background: #3d5b99"></i></a></span>
					<span><a href="https://twitter.com/PeruLeading" target="_blank" title="Our Twitter" ><i class="fa fa-twitter" style="background: #1da1f2"></i></a></span>
					<span><a href="https://www.youtube.com/channel/UC9J7SXa9fT89DBT2-bHgmZw" target="_blank" title="Our Youtube"><i class="fa fa-youtube-play" style="background: #ff0000"></i></a></span>
					<span><a href="https://www.linkedin.com/company/2800909/" target="_blank" title="Our Linkedin"><i class="fa fa-linkedin" style="background: #0077b5"></i></a></span>
					<span><a href="javascript:alert('Contact us: +51 984 836 571')"><img src="https://leadingperutravel.com/wp-content/uploads/Whatsapp-min.png" alt="Whatsapp Leading Peru Travel" style="max-width: 100%"></a></span>
				</aside>
				<div style="font-size: 1.05rem">
					<img src="https://leadingperutravel.com/wp-content/uploads/Whatsapp-min.png" alt="Contact us Leading Peru Travel" style="width: 40px">
					<strong>+51 984 836 571</strong> - <strong>+51 984 509 207</strong>
				</div>
				<p><span style="color: #f6360b; margin-right: 1rem"><i class="fa fa-phone fa-1x"></i> <strong style="font-size: 1rem"> (+51) 84 - 310823 </strong></span>
				<span style="color: #677332;"><i class="fa fa-envelope-o fa-1x"></i>  info@leadingperutravel.com</span></p>
				<div class="header-language">
					<?php dynamic_sidebar('ídiomas'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<nav class="col-md-12 menu menu-tours" role="nav">
			<button class="menu-tours-btn">MENU LEADING <i class="fa fa-1x fa-reorder"></i></button>
			<?php 
				wp_nav_menu(array('menu' => 'principal')); 
			//ubermenu( 'main' , array( 'menu' => 24 ) );  
			?>
		</nav>
	</div>
	<script>
		$(document).scroll(function(){
			var top = $(document).scrollTop();
			if (top >= 160) {
				$('.menu-tours').css({'position':'fixed','top':'0px'});
			}else{
				$('.menu-tours').css({'position':'relative','top':'0px'});
			}
		});

		let selectElemetnList = $("#menu-tours .sub-menu");
		selectElemetnList.each(function(index, el) {
			//console.log(el.childElementCount);
			let countElementLi = el.childElementCount;
			let isOddElementLi =isOdd(countElementLi);
			//console.log(isOddElementLi);
			if(isOddElementLi === 1){
				console.log(el);
			}			
		});
		
		function isOdd(num) { return num % 2;}

	</script>
</header>
