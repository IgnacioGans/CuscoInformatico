<!-- single.php (before) -->
<?php get_header(); ?>
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>


<div class="slider-post" id="msliderh">
	<div style="position: absolute; background: rgba(68, 66, 66, 0.4) url(https://leadingperutravel.com/wp-content/uploads/Leading-Peru-Travel-51.jpg) 0px -500px; background-size: cover; top: 0; left: 0; right: 0; bottom: 0; z-index: 9; filter: blur(3px)"></div>

	<div class="container-fluid" style="background: #161b0e6e; z-index: 9">
		<div class="container" style="z-index: 10">
			<div class="row">
				<div class="col-md-9">
					<div class="post-title" style="background: none">
						<h2><?php the_title(); ?></h2>
						<h4>Tour <?php the_field('titulo'); echo " " ?><?php _e("[:es]Dias en Peru[:en]Days in Peru[:pb]Dias no Peru[:]") ?></h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="reservaciones" style="margin: 2rem 0 .5rem 0">
						<a href="<?php bloginfo('url'); ?>/reservations?id=<?= $post->ID; ?>"  class="btn btn-danger"> 
							<strong style="font-size: 1.25rem">From <?php the_field('precio'); ?> USD</strong><br>
							<i class="fa fa-shopping-cart"></i> <?php _e("[:es]RESERVAR[:en]BOOK HERE[:pb]LIVRO AGORA[:]") ?> <br>
							<small><i class="fa fa-envelope-o"></i> reservas@leadingperutravel.com</small>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="container-fluid leading">
	<div class="post">
		<div class="row">
			<div class="col-md-3">
				<section class="sidebar">
					<nav class="menuSidebar">
						<?php 							
						$arg = array('exclude' => "23,24");
							global $post;
							$categories = get_the_category($post->ID);
							//var_dump($categories);
							$parent = $categories[0]->parent;
							/*$categoriaP = get_the_category($categories[0]->term_id);
							echo "<h2 class='titulo2'>".$categoriaP[0]->name."</h2>";*/
						?>
						<?php 					
							//$categories=get_categories('parent='.$parent.'&exclude=23,24');
							foreach ($categories as $cat) { ?>
							 <ul class="caja sidebarList">
							    <li><h3 style="text-transform: uppercase;"><?php echo $cat->cat_name;?></h3></li>
									<?php  		
									query_posts('cat='.$cat->cat_ID);
									if (have_posts()) : while (have_posts()) : the_post(); ?>			
									<li><a href="<?php the_permalink(); ?>"><i class="fa fa-caret-right"></i> <?php the_title(); ?> </a></li>
									<?php endwhile; endif; wp_reset_query(); ?>
								</ul> <?php
							}
							$categories = get_categories();
							foreach ($categories as $cat) { ?>
							 <ul class="caja sidebarList">
							    <li><h3 style="text-transform: uppercase;"><?php echo $cat->cat_name;?></h3></li>
									<?php  		
									query_posts('cat='.$cat->cat_ID);
									if (have_posts()) : while (have_posts()) : the_post(); ?>			
									<li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></li>
									<?php endwhile; endif; wp_reset_query(); ?>
								</ul> <?php
							}
						?>				
					</nav>
				</section>
			</div>
			<div class="col-md-6 post-content">
				<div>
					<?php the_content(); ?>
				</div>
				<div class="reservaciones" style="margin: 2rem 0 .5rem 0">
					<a href="<?php bloginfo('url'); ?>/reservations?id=<?= $post->ID; ?>"  class="btn btn-danger"> 
						<strong style="font-size: 1.25rem">From <?php the_field('precio'); ?> USD</strong><br>
						<i class="fa fa-shopping-cart"></i> <?php _e("[:es]RESERVAR[:en]BOOK HERE[:pb]LIVRO AGORA[:]") ?> <br>
						<small><i class="fa fa-envelope-o"></i> reservas@leadingperutravel.com</small>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="barra-lateral" id="barra-lateral">
					<div class="barra-lateral-question">
						<h5><?php _e("<!--:es--> Consulta sobre el Tour/paquete <!--:--><!--:en-->Consultation about the Tour / package<!--:--><!--:pb-->Consulta sobre o Tour / pacote<!--:-->");?></h5>
						<?php echo do_shortcode('[contact-form-7 id="3672" title="Fast question"]'); ?>
					</div>
					<div class="leading-box">
						<h5><?php _e("<!--:es-->Busca tu destino turístico en Perú<!--:--><!--:en-->Search your tourist destination in Peru<!--:--><!--:pb-->Procure o seu destino turístico no Peru<!--:-->");?></h5>
						<div id="world-map" style="max-width: 100%; height: 400px"></div>
						<script>
						$(function(){
							$('#world-map').vectorMap({
								map: 'peru',
								onRegionClick:function(event, code){
									var name = (code);
									window.location.replace("<?php bloginfo('url'); ?>/tours/destinos/"+code+"");
								},
								backgroundColor: '#b3d1ff',
								series: {
								regions: [{
									values: {"c0":"1","c1":"2"},
									scale: ['#d9d4ca', '#b3d1ff'],
									normalizeFunction: 'polynomial'
									}]
								},
								regionStyle:{
									initial:{
										fill:"#f4f3f0",
										stroke:"#666666",
										"stroke-width":1,
										"stroke-opacity":1
									},
									hover:{
										fill:"#9daf35",
										"fill-opacity":"1"
									}
								}
							})
						});
						</script>
					</div>
					<div class="row" style="margin-top: 1rem;">
						<div class="col-md-12">
							<h5><?php _e("<!--:es-->Tenemos más servicios<!--:--><!--:en-->We have more services<!--:--><!--:pb-->Nós temos mais serviços<!--:-->");?></h5>
						</div>
						<div class="leading-services-list-item col-md-12">
							<a href="<?php bloginfo('url');?>/hotels-in-peru/">
							<i class="fa fa-1x fa-hotel"></i>
							<h3><?php _e("<!--:es-->Hoteles en Perú<!--:--><!--:en-->Hotels in Peru<!--:--><!--:pb-->Hotéis em Peru<!--:-->");?></h3>
							<img src="<?php bloginfo('url');?>/wp-content/uploads/hotel-lima.jpg" alt="Peru Tour Machu Picchu includes hotel. Book now with Leading Peru Travel"></a>
						</div>
						<div class="leading-services-list-item col-md-12">
							<a href="<?php bloginfo('url');?>/train-tickets/"><i class="fa fa-1x fa-train"></i>
							<img src="<?php bloginfo('url');?>/wp-content/uploads/tren-ticket.jpg" alt="Tour Machu Picchu includes Train Ticket. Book now with Leading Peru Travel">
							<h3><?php _e("<!--:es-->Ticket de tren<!--:--><!--:en-->Train Ticket<!--:--><!--:pb-->Bilhete de trem<!--:-->");?></h3></a>
						</div>
						<div class="leading-services-list-item col-md-12">
							<a href="<?php bloginfo('url');?>/airplane-tickets/"> 
							<i class="fa fa-1x fa-plane"></i>
							<img src="<?php bloginfo('url');?>/wp-content/uploads/turismo-avion-pasajes-consejos.jpg" alt="Tour Machu Picchu includes Flight Ticket Peru and South America. Book now with Leading Peru Travel">
							<h3><?php _e("<!--:es-->Ticket de vuelo<!--:--><!--:en-->Flight Ticket<!--:--><!--:pb-->Bilhete de vôo<!--:-->");?></h3>
							</a>
						</div>
						<div class="leading-services-list-item col-md-12">
							<a href=" <?php bloginfo('url');?>/buses-in-peru/"><i class="fa fa-1x fa-bus"></i>
							<img src="<?php bloginfo('url');?>/wp-content/uploads/bus-ticket.jpg" alt="Bus Ticket Machu Picchu, Titicaca, Arequipa, Lima. Book now with Leading Peru Travel">
							<h3><?php _e("<!--:es-->Pasajes bus<!--:--><!--:en-->Bus Ticket<!--:--><!--:pb-->Bilhete de autocarro<!--:-->");?></h3></a>
						</div>
					</div>



					<?php dynamic_sidebar('barra-lateral'); ?>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="container leading-popular">
	<?php $categories = get_the_category();
		if ( ! empty( $categories ) ) {
			$id = ( $categories[0]->cat_ID );?>
	<section class="row packages">	
		<div class="col-md-12">
			<h3 class="leading-catList-title" style="text-transform: uppercase;"><?php  _e("[:es]Más toures similares de[:en]More similar tours of[:pb]Passeios mais semelhantes de[:]") ?>:  <?= $categories[0]->name; ?></h3>
		</div>
	
		<?php 
		$news = new WP_Query(array('post_type'=>'post','cat'=>array($id),'showposts'=>3,'order'=>'DESC','post__not_in'=> array(get_the_ID())));
		if ( $news->have_posts() ) :
	        while ( $news->have_posts() ) : $news->the_post(); ?>
                <div class="package col-md-4">
					<div class="package-item">
						<div class="package-item-precio">
							<i class="fa fa-tags"></i>
							<small><?php _e("<!--:es-->Desde<!--:--><!--:en-->From<!--:--><!--:pb-->A partir de<!--:-->");?>:</small>
							<span><strong><?php the_field('precio');?> <small>USD</small></strong></span>
						</div>
						<div class="package-more">
							<a href="<?= $category->slug ?>">
								<strong><?php _e("[:es]Tours [:en]Tours[:pb]Tours[:]"); echo " "; the_field('dias'); echo " ";   _e("[:es]dias [:en]days[:pb]dias[:]")?>  </strong>
							</a>
						</div>
						<figure class="package-item-img">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</figure>
						<p class="package-item-title">
							<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
						</p>
						<div class="package-item-action text-md-center">
							<a class="btn btn-danger" style="background-color: #7d8e33; border-color: #7d8e33" href="<?php the_permalink() ?>"><i class="fa fa-1x fa-chevron-circle-right"></i> <?php _e("[:es]Saber más[:en]See more[:pb]Ver mais[:]") ?></a>
						</div>
					</div>
				</div>
	        <?php endwhile;
	    endif;?>
	</section>
	<?php } ?>
</div>
<?php get_footer(); ?>

<!-- single.php (after)-->
<?php get_header(); ?>
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<style>
	.post-title.rk_title{
		padding: 10px 20px;
		background: -moz-linear-gradient(top, rgba(2,30,0,0.33) 0%, rgba(0,0,0,0.33) 100%);
		background: -webkit-linear-gradient(top, rgba(2,30,0,0.33) 0%,rgba(0,0,0,0.33) 100%);
		background: linear-gradient(to bottom, rgba(2,30,0,0.33) 0%,rgba(0,0,0,0.33) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#54021e00', endColorstr='#54000000',GradientType=0 );
	}

	.post-title.rk_title h2{
		font-size:16px;
		margin:10px 0;
	}
	.post-title.rk_title h4 {
		font-size:10px;
		margin-bottom: 5px;
		text-align: right;
	}

	.post-title.rk_title h2, .post-title.rk_title h4 {		
		color:white;
	}
	.leading-catList-title{
		color:white;
	}

	@media only screen 
  	and (min-width: 900px) {
		.col-md-9.slider{
			padding:0;
			min-height: 400px;
			position: relative; 
			background: rgba(68, 66, 66, 0.4) url(https://leadingperutravel.com/wp-content/uploads/Leading-Peru-Travel-51.jpg) 0px -500px; 
			background-size: cover;
			background-position: left bottom;
			background-repeat: no-repeat;
			z-index: 9;
		}

		.col-md-3.price{
			text-align: center;
		}

		
		.block_reservation{
			display:flex;
			justify-content: space-around;
		}
		.block_reservation .rk_left{
			
		}
		.block_reservation .rk_right{
		}
		.rk_reservation.btn.btn-danger.btn-block,
		.tips_small.rk_SmallText,
		.block_reservation{
			margin:20px 0;
		}
		.nav-tabs .nav-link.active  {
			border:none;
			border-bottom: 1px solid black;
		}
		.nav-tabs .nav-link.active:hover{
			background-color: lightgray;
			color:black;
		}
  	}


</style>
<div class="rk_bgImg container-fluid">
	<div class="post">
		<div class="row">
			<div class="col-md-3 price">				
				<div class="card">				  
				  <div class="card-block">
					<ul class="nav nav-tabs" role="tablist">
					  <li class="nav-item btn-block">
					    <a class="nav-link active " data-toggle="tab" href="#estandar" role="tab">Estándar</a>
					  </li>
					  <!-- <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#comfort" role="tab">Comfort</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#luxury" role="tab">Messages</a>
					  </li> -->
					</ul>

					<div class="tab-content">
					  <div class="tab-pane active" id="estandar" role="tabpanel">
					  	<div class="block_reservation">
					  		<div class="rk_left">
					  			<?php _e("[:es]Precio [:en]Price [:pb]preço[:]") ?><br>
					  			<i class="fa fa-clock-o" aria-hidden="true"></i> 22 <?php _e("[:es]Días [:en]Days [:pb]dias[:]") ?>
					  		</div>
  						  	<div class="rk_right">
						  		<strong>
						  			<?php _e("[:es]desde [:en]from [:pb]desde[:]") ?> 
						  			<?php the_field('precio'); ?> 
						  			USD
						  		</strong><br>
						  		<i class="fa fa-bed" aria-hidden="true"></i> Standard						  		
						  	</div>	
						</div>	
						<small class="tips_small rk_SmallText">
							<?php _e("[:es]Excluidos los vuelos internacionales. [:en]International flights excluded [:pb]Voos internacionais excluídos[:]") ?> 
						</small>

						<a href="<?php bloginfo('url'); ?>/reservations?id=<?= $post->ID; ?>"  class="rk_reservation btn btn-danger btn-block"> 
							<?php _e("[:es]Reserva ya! [:en]Reservation now! [:pb]Reserva agora![:]") ?> 
						</a>	
						<small class="tips_small rk_SmallText">
							<?php _e("[:es]Para cualquier información, enviar un correo. [:en]For any information, send an email [:pb]Para qualquer informação, envie um email[:]") ?> 
						</small>	

						<a class="btn btn-secondary tips_small rk_SmallText" href="mailto:reservas@leadingperutravel.com">LeadingPerutravel</a><br>
						<small tips_small rk_SmallText><i class="fa fa-envelope-o"></i> reservas@leadingperutravel.com</small>		
					  </div>
					  <div class="tab-pane" id="comfort" role="tabpanel">
					  	<a href="<?php bloginfo('url'); ?>/reservations?id=<?= $post->ID; ?>"  class="btn btn-danger tips_small rk_SmallText"> 
							<strong style="font-size: 1.25rem">From <?php the_field('precio'); ?> USD</strong><br>
							<i class="fa fa-shopping-cart"></i> <?php _e("[:es]RESERVAR[:en]BOOK HERE[:pb]LIVRO AGORA[:]") ?> <br>
							<small><i class="fa fa-envelope-o"></i> reservas@leadingperutravel.com</small>
						</a>
					  </div>
					  <div class="tab-pane" id="luxury" role="tabpanel">
						<a href="<?php bloginfo('url'); ?>/reservations?id=<?= $post->ID; ?>"  class="btn btn-danger"> 
							<strong style="font-size: 1.25rem">From <?php the_field('precio'); ?> USD</strong><br>
							<i class="fa fa-shopping-cart"></i> <?php _e("[:es]RESERVAR[:en]BOOK HERE[:pb]LIVRO AGORA[:]") ?> <br>
							<small><i class="fa fa-envelope-o"></i> reservas@leadingperutravel.com</small>
						</a>
					  </div>
					</div>
				  </div>
				</div>


				<!-- <a href="<?php bloginfo('url'); ?>/reservations?id=<?= $post->ID; ?>"  class="btn btn-danger"> 
					<strong style="font-size: 1.25rem">From <?php the_field('precio'); ?> USD</strong><br>
					<i class="fa fa-shopping-cart"></i> <?php _e("[:es]RESERVAR[:en]BOOK HERE[:pb]LIVRO AGORA[:]") ?> <br>
					<small><i class="fa fa-envelope-o"></i> reservas@leadingperutravel.com</small>
				</a> -->
			</div>
			<div class="col-md-9 slider" style="">
				<div class="post-title rk_title">
					<h2><?php the_title(); ?></h2>
					<h4>Tour <?php the_field('titulo'); echo " " ?><?php _e("[:es]Dias en Peru[:en]Days in Peru[:pb]Dias no Peru[:]") ?></h4>
				</div>
			</div>

		</div>
	</div>	
</div>	
<!-- 
<div class="slider-post" id="msliderh">
	<div style="position: absolute; background: rgba(68, 66, 66, 0.4) url(https://leadingperutravel.com/wp-content/uploads/Leading-Peru-Travel-51.jpg) 0px -500px; background-size: cover; top: 0; left: 0; right: 0; bottom: 0; z-index: 9; filter: blur(3px)"></div>

	<div class="container-fluid" style="background: #161b0e6e; z-index: 9">
		<div class="container" style="z-index: 10">
			<div class="row">
				<div class="col-md-9">
					<div class="post-title" style="background: none">
						<h2><?php the_title(); ?></h2>
						<h4>Tour <?php the_field('titulo'); echo " " ?><?php _e("[:es]Dias en Peru[:en]Days in Peru[:pb]Dias no Peru[:]") ?></h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="reservaciones" style="margin: 2rem 0 .5rem 0">
						<a href="<?php bloginfo('url'); ?>/reservations?id=<?= $post->ID; ?>"  class="btn btn-danger"> 
							<strong style="font-size: 1.25rem">From <?php the_field('precio'); ?> USD</strong><br>
							<i class="fa fa-shopping-cart"></i> <?php _e("[:es]RESERVAR[:en]BOOK HERE[:pb]LIVRO AGORA[:]") ?> <br>
							<small><i class="fa fa-envelope-o"></i> reservas@leadingperutravel.com</small>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div> -->
<div class="container-fluid leading">
	<div class="post">
		<div class="row">
			<div class="col-md-3">
				<section class="sidebar">
					<nav class="menuSidebar">
						<?php 							
						$arg = array('exclude' => "23,24");
							global $post;
							$categories = get_the_category($post->ID);
							//var_dump($categories);
							$parent = $categories[0]->parent;
							/*$categoriaP = get_the_category($categories[0]->term_id);
							echo "<h2 class='titulo2'>".$categoriaP[0]->name."</h2>";*/
						?>
						<?php 					
							//$categories=get_categories('parent='.$parent.'&exclude=23,24');
							foreach ($categories as $cat) { ?>
							 <ul class="caja sidebarList">
							    <li><h3 style="text-transform: uppercase;"><?php echo $cat->cat_name;?></h3></li>
									<?php  		
									query_posts('cat='.$cat->cat_ID);
									if (have_posts()) : while (have_posts()) : the_post(); ?>			
									<li><a href="<?php the_permalink(); ?>"><i class="fa fa-caret-right"></i> <?php the_title(); ?> </a></li>
									<?php endwhile; endif; wp_reset_query(); ?>
								</ul> <?php
							}
							$categories = get_categories();
							foreach ($categories as $cat) { ?>
							 <ul class="caja sidebarList">
							    <li><h3 style="text-transform: uppercase;"><?php echo $cat->cat_name;?></h3></li>
									<?php  		
									query_posts('cat='.$cat->cat_ID);
									if (have_posts()) : while (have_posts()) : the_post(); ?>			
									<li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></li>
									<?php endwhile; endif; wp_reset_query(); ?>
								</ul> <?php
							}
						?>				
					</nav>
				</section>
			</div>
			<div class="col-md-6 post-content">
				<div>
					<?php the_content(); ?>
				</div>
				<div class="reservaciones" style="margin: 2rem 0 .5rem 0">
					<a href="<?php bloginfo('url'); ?>/reservations?id=<?= $post->ID; ?>"  class="btn btn-danger"> 
						<strong style="font-size: 1.25rem">From <?php the_field('precio'); ?> USD</strong><br>
						<i class="fa fa-shopping-cart"></i> <?php _e("[:es]RESERVAR[:en]BOOK HERE[:pb]LIVRO AGORA[:]") ?> <br>
						<small><i class="fa fa-envelope-o"></i> reservas@leadingperutravel.com</small>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="barra-lateral" id="barra-lateral">
					<div class="barra-lateral-question">
						<h5><?php _e("<!--:es--> Consulta sobre el Tour/paquete <!--:--><!--:en-->Consultation about the Tour / package<!--:--><!--:pb-->Consulta sobre o Tour / pacote<!--:-->");?></h5>
						<?php echo do_shortcode('[contact-form-7 id="3672" title="Fast question"]'); ?>
					</div>
					<div class="leading-box">
						<h5><?php _e("<!--:es-->Busca tu destino turístico en Perú<!--:--><!--:en-->Search your tourist destination in Peru<!--:--><!--:pb-->Procure o seu destino turístico no Peru<!--:-->");?></h5>
						<div id="world-map" style="max-width: 100%; height: 400px"></div>
						<script>
						$(function(){
							$('#world-map').vectorMap({
								map: 'peru',
								onRegionClick:function(event, code){
									var name = (code);
									window.location.replace("<?php bloginfo('url'); ?>/tours/destinos/"+code+"");
								},
								backgroundColor: '#b3d1ff',
								series: {
								regions: [{
									values: {"c0":"1","c1":"2"},
									scale: ['#d9d4ca', '#b3d1ff'],
									normalizeFunction: 'polynomial'
									}]
								},
								regionStyle:{
									initial:{
										fill:"#f4f3f0",
										stroke:"#666666",
										"stroke-width":1,
										"stroke-opacity":1
									},
									hover:{
										fill:"#9daf35",
										"fill-opacity":"1"
									}
								}
							})
						});
						</script>
					</div>
					<div class="row" style="margin-top: 1rem;">
						<div class="col-md-12">
							<h5><?php _e("<!--:es-->Tenemos más servicios<!--:--><!--:en-->We have more services<!--:--><!--:pb-->Nós temos mais serviços<!--:-->");?></h5>
						</div>
						<div class="leading-services-list-item col-md-12">
							<a href="<?php bloginfo('url');?>/hotels-in-peru/">
							<i class="fa fa-1x fa-hotel"></i>
							<h3><?php _e("<!--:es-->Hoteles en Perú<!--:--><!--:en-->Hotels in Peru<!--:--><!--:pb-->Hotéis em Peru<!--:-->");?></h3>
							<img src="<?php bloginfo('url');?>/wp-content/uploads/hotel-lima.jpg" alt="Peru Tour Machu Picchu includes hotel. Book now with Leading Peru Travel"></a>
						</div>
						<div class="leading-services-list-item col-md-12">
							<a href="<?php bloginfo('url');?>/train-tickets/"><i class="fa fa-1x fa-train"></i>
							<img src="<?php bloginfo('url');?>/wp-content/uploads/tren-ticket.jpg" alt="Tour Machu Picchu includes Train Ticket. Book now with Leading Peru Travel">
							<h3><?php _e("<!--:es-->Ticket de tren<!--:--><!--:en-->Train Ticket<!--:--><!--:pb-->Bilhete de trem<!--:-->");?></h3></a>
						</div>
						<div class="leading-services-list-item col-md-12">
							<a href="<?php bloginfo('url');?>/airplane-tickets/"> 
							<i class="fa fa-1x fa-plane"></i>
							<img src="<?php bloginfo('url');?>/wp-content/uploads/turismo-avion-pasajes-consejos.jpg" alt="Tour Machu Picchu includes Flight Ticket Peru and South America. Book now with Leading Peru Travel">
							<h3><?php _e("<!--:es-->Ticket de vuelo<!--:--><!--:en-->Flight Ticket<!--:--><!--:pb-->Bilhete de vôo<!--:-->");?></h3>
							</a>
						</div>
						<div class="leading-services-list-item col-md-12">
							<a href=" <?php bloginfo('url');?>/buses-in-peru/"><i class="fa fa-1x fa-bus"></i>
							<img src="<?php bloginfo('url');?>/wp-content/uploads/bus-ticket.jpg" alt="Bus Ticket Machu Picchu, Titicaca, Arequipa, Lima. Book now with Leading Peru Travel">
							<h3><?php _e("<!--:es-->Pasajes bus<!--:--><!--:en-->Bus Ticket<!--:--><!--:pb-->Bilhete de autocarro<!--:-->");?></h3></a>
						</div>
					</div>



					<?php dynamic_sidebar('barra-lateral'); ?>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="container leading-popular">
	<?php $categories = get_the_category();
		if ( ! empty( $categories ) ) {
			$id = ( $categories[0]->cat_ID );?>
	<section class="row packages">	
		<div class="col-md-12">
			<h3 class="leading-catList-title" style="text-transform: uppercase;"><?php  _e("[:es]Más toures similares de[:en]More similar tours of[:pb]Passeios mais semelhantes de[:]") ?>:  <?= $categories[0]->name; ?></h3>
		</div>
	
		<?php 
		$news = new WP_Query(array('post_type'=>'post','cat'=>array($id),'showposts'=>3,'order'=>'DESC','post__not_in'=> array(get_the_ID())));
		if ( $news->have_posts() ) :
	        while ( $news->have_posts() ) : $news->the_post(); ?>
                <div class="package col-md-4">
					<div class="package-item">
						<div class="package-item-precio">
							<i class="fa fa-tags"></i>
							<small><?php _e("<!--:es-->Desde<!--:--><!--:en-->From<!--:--><!--:pb-->A partir de<!--:-->");?>:</small>
							<span><strong><?php the_field('precio');?> <small>USD</small></strong></span>
						</div>
						<div class="package-more">
							<a href="<?= $category->slug ?>">
								<strong><?php _e("[:es]Tours [:en]Tours[:pb]Tours[:]"); echo " "; the_field('dias'); echo " ";   _e("[:es]dias [:en]days[:pb]dias[:]")?>  </strong>
							</a>
						</div>
						<figure class="package-item-img">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</figure>
						<p class="package-item-title">
							<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
						</p>
						<div class="package-item-action text-md-center">
							<a class="btn btn-danger" style="background-color: #7d8e33; border-color: #7d8e33" href="<?php the_permalink() ?>"><i class="fa fa-1x fa-chevron-circle-right"></i> <?php _e("[:es]Saber más[:en]See more[:pb]Ver mais[:]") ?></a>
						</div>
					</div>
				</div>
	        <?php endwhile;
	    endif;?>
	</section>
	<?php } ?>
</div>
<?php get_footer(); ?>
