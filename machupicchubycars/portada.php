<?php /* 
template name: portada
*/ ?>
<script>
	console.log("ptda.p --> Remking");
</script>
<?php get_header(); ?>
	<section class="slider" style="position: relative;">
		<?php masterslider(2) ?>
		<section id="compra" class="container-fluid form-transporte" style="top: 50% !important">
			<div class="form-box container">
				<div class="panel panel-form ">
					<form role="form" class="form-horizontal" action="<?php bloginfo('url'); ?>/book-now" method="get">
						<h2> <?php _e("[:es]Compra tu pasaje a[:en]Buy your ticket to [:de]Kaufen Sie Ihr Ticket nach [:fr]Achetez votre billet pour[:]") ?> <strong>Machu Picchu</strong></h2>
						<h3 style="color: white; font-weight: 400;"><?php _e("[:es]Viaja a Machu Picchu por Bus[:en]Travel to Machu Picchu by Bus[:de]Fahrt nach Machu Picchu mit dem Bus[:fr]Voyage au Machu Picchu en bus[:]") ?></h3>
						<input type="hidden" name="type" value="2">
						<input type="hidden" name="idPrograma" value="idaVuelta">
						<div class="row">
							<div class="radio-content col-md-8">
								<label class="radio-inline control-label">
									<input type="radio" name="programa" id="idaVuelta" class="radiobox-boom" data="idaVuelta" value="<?php _e("[:es]Ida y Vuelta[:en]round trip[:de]round trip[:fr]round trip[:]") ?>" checked >
									<?php _e("[:es]Ida y Vuelta[:en]round trip[:de]round trip[:fr]round trip[:]") ?>
								</label>
								<label class="radio-inline control-label">
									<input type="radio" name="programa" id="ida" class="radiobox-boom" data="ida" value="<?php _e("[:es]Solo ida[:en]one way[:de]one way[:fr]one way[:]")  ?>" >
									<?php _e("[:es]Solo ida[:en]one way[:de]one way[:fr]one way[:]") ?>
								</label>
								<label class="radio-inline control-label">
									<input type="radio" name="programa" id="vuelta" class="radiobox-boom" data="ida" value="<?php _e("[:es]Solo Vuelta[:en]return journey[:de]return journey[:fr]return journey[:]") ?>" >
									<?php _e("[:es]Solo Vuelta[:en]return journey[:de]return journey[:fr]return journey[:]") ?>
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<div class="input-group" style="display: block;">
									<div class="input-group-addon" style="width: 100%; text-align:left; display: block;"><i class="fa fa-map-marker"></i> <?php _e("[:es]Origen[:en]Origin[:fr]Origin[:de]Origin[:]") ?></div>
									<select id="origen" name="origen" class="form-control border-input">
										<option value="Cusco" selected data="origen" terminal="Plaza de Armas (MacDonals)" salida="7:30am" llegada="9:20pm"> Cusco</option>
										<option value="Ollantaytambo" data="origen" terminal="Plaza de Armas de Ollantaytambo" salida="9:30am" llegada="7:30pm"> Ollantaytambo</option>
										<option value="Hidroelectrica" data="destino" terminal="Terminal Sakura Expedition" salida="2:45am" llegada="2:00pm"> Hidroeléctrica</option>
										<option value="Santa Teresa" data="destino" terminal="Plaza Santa Teresa" salida="3:30pm" llegada="1:00pm"> Santa Teresa</option>
									</select>
								</div>
								<div class="origen-data"><b>Terminal</b>: Plaza de Armas (MacDonals) <b>Salida</b>: 7:30am</div>
							</div>
							<div class="col-md-3">
								<div class="input-group" style="display: block;">
									<div class="input-group-addon" style="width: 100%; text-align:left; display: block;"><i class="fa fa-map-marker"></i> <?php _e("[:es]destino[:en]Destination[:fr]Destination[:de]Destination[:]") ?></div>
									<select id="destino" name="destino" class="form-control border-input">
										<option value="Cusco" data="origen" terminal="Plaza de Armas (MacDonals)" salida="7:30am" llegada="9:20pm"> Cusco</option>
										<option value="Ollantaytambo" data="origen" terminal="Plaza de Armas de Ollantaytambo" salida="9:30am" llegada="7:30pm"> Ollantaytambo</option>
										<option value="Hidroelectrica" selected data="destino" terminal="Terminal Sakura Expedition" salida="2:45am" llegada="2:00pm"> Hidroeléctrica</option>
										<option value="Santa Teresa" data="destino" terminal="Plaza Santa Teresa" salida="3:30pm" llegada="1:00pm"> Santa Teresa</option>
									</select>
								</div>
								<div class="destino-data"><b>Terminal</b>: Terminal Sakura Expedition <b>Llegada</b>: 2:00pm</div>
							</div>
							<div class="col-md-2">
								<div class="input-group date" id="fechaViaje"  style="display: block;">
									<div class="input-group-addon" style="width: 100%; text-align:left; display: block;"><i class="fa fa-calendar border-input"></i> <?php _e("[:es]Fecha de Viaje[:en]Travel Date[:de]Travel Date[:fr]Travel Date[:]") ?></div>
									<input class="campo form-control border-input" required type="text" name="fechaViaje" id="tripDate">
								</div>
							</div>
							<div class="col-md-2">
								<div class="input-group date" id="fechaRetorno" style="display: block;">
									<div class="input-group-addon" id="RD" style="width:100%; text-align:left;  display: block;"><i class="fa fa-calendar"></i> <?php _e("[:es]Fecha retorno[:en]travel Return[:fr]travel Return[:de]travel Return[:]") ?></div> 
									<input class="campo form-control border-input" required type="text" name="fechaRetorno" id="returnDate">
			                    </div>
							</div>
							<div class="col-md-2 button-content">
								<button class="btn btn-danger btn-color "><i class="fa fa-credit-card"></i> <?php _e("[:es]COMPRAR BOLETO[:en]Buy your ticket[:fr]Buy your ticket[:de]Buy your ticket[:]") ?></button>
								<label class="campo" for="card"><img style="max-height: 25px; padding: .2rem" src="https://machupicchubycars.com/wp-content/uploads/visa.png" alt="Payment credit card"><img style="max-height: 25px; padding: .2rem" src="https://machupicchubycars.com/wp-content/uploads/mastercard.png" alt="Payment credit card"><img style="max-height: 25px; padding: .2rem" src="https://machupicchubycars.com/wp-content/uploads/american-express.gif" alt="Payment Diners Club"><img style="max-height: 25px; padding: .2rem;" src="https://machupicchubycars.com/wp-content/uploads/logo-diners.png" alt="Payment Amercian Express"></label>
							</div>
						</div>
					</form>
				</div>	
			</div>
		</section>
	</section>
	<div class="notification text-center" style="background: #ff002f;color: white;padding: .5rem; border-top: 4px solid #444; border-bottom: 4px solid orange ">
		<h3><?php _e("[:es]MachuPicchu por Bus, reserva nuestros tours, descubre nuestros mejores precios[:en]MachuPicchu by Bus, book our tours, discover our best prices[:de]MachuPicchu mit dem Bus, buchen Sie unsere Touren, entdecken Sie unsere besten Preise[:fr]MachuPicchu en Bus, réservez nos visites, découvrez nos meilleurs prix[:]") ?> <a href="https://www.machupicchubycars.com/tours-machupicchu" class="btn btn-warning"><?php _e("[:es]Quiero saber más[:en]Know More![:de]Ich möchte mehr wissen[:fr]Je veux en savoir plus[:]")?></a></h3>
	</div>
	<section class="about text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="https://www.machupicchubycars.com/wp-content/uploads/imagen-portada-e1507153543911.png" alt="Machupicchu by car" style="max-width: 100%">
				</div>
				<div class="col-md-7">
					<h2 style="font-size: 4.5rem;text-align: center;text-transform: uppercase;color: #ff4b00;">TOURS MACHUPICCHU BY CAR</h2>
    				<h3>Sakura Expeditions 100% Local tour operator</h3>
					<p style="font-size:1.8rem"><?php _e("[:es]Sakura Expedition es una empresa única en los Andes. Ofreciendo tures alternativos con el único objetivo de enseñar a nuestros clientes la belleza que cuenta Perú, así mismo apoyando a los pueblos alejados a desarrollarse utilizando las rutas alternativas. Nuestras programas elaborados nos permite atender a todo tipo de pasajeros incluidos a nuestros clientes de bajos recursos, dentro de todo estos programas hay un programas elaborada a tu medida.[:en]Sakura Expedition is a unique company in the Andes. Offering alternative tours with the sole objective of teaching our clients the beauty that Peru has, as well as supporting the remote villages to develop using alternative routes. Our elaborate programs allow us to attend all types of passengers, including our low-income customers. Within these programs, there are programs tailored to your needs.[:]")  ?>
					<p><a href="<?php bloginfo('url') ?>/<?php _e("[:es]nuestra-agencia[:en]about-us[:]") ?>" class="btn btn-danger"> <i class="fa fa-users"></i> <?php _e("[:es]Conoce más[:en]View More[:]") ?></a></p> 
				</div>
			</div>
		</div>
	</section>
	<section class="presentation">
		<div style="max-width: 80%; margin: auto;">
		<?php
		query_posts('page_id=2'); 
		if (have_posts()): while (have_posts()) : the_post();
			the_content();
		endwhile; endif;
		wp_reset_query();
		?>
		<a class="btn btn-primary" href="https://www.machupicchubycars.com/tours-machupicchu"><i class="fa fa-bus"></i> <?php _e("[:es]Tours a Machu Picchu en Bus[:en]Tours Machu Picchu in bus[:]")  ?></a>
		</div>
		
		<section class="categories container-fluid">
			<div style="position:absolute;background: rgba(255, 0, 47, 0.95);top:0;left:0;right:0;bottom:0;"></div>
			<div class="col-md-12">
				<h2><?php _e("[:es]El tour ideal en el Perú[:en]Choose your best package in Peru[:]") ?></h2>
			</div>
			<div class="category col-md-4">
				<figure class="category-img">
					<a href="https://www.machupicchubycars.com/tours-montana"><img src="https://www.machupicchubycars.com/wp-content/uploads/salkantay7.jpg" alt="Tours Montaña"></a>
				</figure>
				<h3 class="category-name"><a href="https://www.machupicchubycars.com/tours-montana"><?php _e("[:es]Tours Montaña[:en]Mountain Tours[:de]Bergtour[:fr]tour de montagne[:]")?></a></h3>
			</div>
			<div class="category col-md-4">
				<figure class="category-img">
					<a href="https://www.machupicchubycars.com/tours-machupicchu"><img src="https://www.machupicchubycars.com/wp-content/uploads/movilidad7-min.jpg" alt="Tours Machu Picchu en Bus"></a>
				</figure>
				<h3 class="category-name"><a href="https://www.machupicchubycars.com/tours-machupicchu"><?php _e("[:es]Tours MachuPicchu en Bus[:en]Machu Picchu Tours by Bus[:de]Machu Picchu Touren mit dem Bus[:fr]Tours Machu Picchu en bus[:]")?></a></h3>
			</div>
			<div class="category col-md-4">
				<figure class="category-img">
					<a href="https://www.machupicchubycars.com/tours-1-dia"><img src="https://www.machupicchubycars.com/wp-content/uploads/laguna-de-humantay-10-min.jpg" alt="Tours de 1 dia"></a>
				</figure>
				<h3 class="category-name"><a href="https://www.machupicchubycars.com/tours-1-dia"><?php _e("[:es]Tours de 1 día[:en]1 day tours[:de]1 Tagestouren[:fr]Visites d'une journée[:]")?></a></h3>
			</div>
		</section>
	</section>

	<section class="packages" style="background: #fff">
		<div class="container">
			<header class="packages-header">
				<h2 class="packages-title" style="color: orangered"><?php _e("<!--:es-->VIAJES POR CARRO A MACHUPICCHU EN PERÚ<!--:--><!--:en-->TOURS TO MACHUPICCHU BY CAR VIA HYDROELECTRIC SAVE AND ENJOY MORE<!--:--><!--:fr-->TOURS TO MACHUPICCHU BY CAR VIA HYDROELECTRIC SAVE AND ENJOY MORE<!--:--><!--:de-->TOURS TO MACHUPICCHU BY CAR VIA HYDROELECTRIC SAVE AND ENJOY MORE<!--:-->") ?> </h2>
				<h3 style="color: orange"><?php _e("[:es]Antes solo Tren! Precios altos!.. AHORA POR CARRO! Ahorra y viaja más[:en]I used to be just train! High prices! .. NOW BY CAR! Save and travel more[:fr]I used to be just train! High prices! .. NOW BY CAR! Save and travel more[:de]I used to be just train! High prices! .. NOW BY CAR! Save and travel more[:]") ?></h3>
				<h4><?php _e("[:es]Aquí te presentamos viajes cortos a Machu Picchu utilizando una ruta alternativa por Hidroelectrica por medio de la ceja de selva cruzando montañas y nevados.  Viaje a tu medida, hemos elaborado estos programas viendo tus necesidad, hemos visto tu tiempo, tu sueño y cuidamos tu ahorro, elije uno de ellos es para ti, tu eres importante para nosotros.[:en]Here we present short trips to Machu Picchu using an alternative route by Hydroelectric through the eyebrow of jungle crossing mountains and snow. Travel to your measure, we have elaborated these programs seeing your needs, we have seen your time, your dream and we take care of your savings, choose one of them is for you, you are important for us.[:fr]Here we present short trips to Machu Picchu using an alternative route by Hydroelectric through the eyebrow of jungle crossing mountains and snow. Travel to your measure, we have elaborated these programs seeing your needs, we have seen your time, your dream and we take care of your savings, choose one of them is for you, you are important for us.[:de]Here we present short trips to Machu Picchu using an alternative route by Hydroelectric through the eyebrow of jungle crossing mountains and snow. Travel to your measure, we have elaborated these programs seeing your needs, we have seen your time, your dream and we take care of your savings, choose one of them is for you, you are important for us.[:]") ?></h4>
			</header>
			<section class="row list-package">
					<?php
					query_posts('cat=3');
					if (have_posts()): while (have_posts()) : the_post();
					if(get_field('portada')!=""){
				  	?>
					<div class="col-md-4">
						<article class="package">
							<figure class="package-figure">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</figure>
							<section class="package-details">
								<p class="package-details-title"><strong><?php the_title(); ?></strong></p>
								<div class="rk_text"> <?php the_excerpt(); ?></div> 
								
								<div class="rk_bottom_flex">
									<div class="package-details-btn text-center">
										<a href="<?php the_permalink(); ?>" class="btn btn-more"><i class="fa fa-angle-double-right"></i> <?php _e("<!--:es-->Leer más<!--:--><!--:en-->See more<!--:--><!--:fr-->See more<!--:--><!--:de-->See more<!--:-->") ?></a>
									</div>
									<div class="package-details-btn">
										<a href="<?php bloginfo('url'); ?>/book-now?type=1&idPrograma=<?= $post->ID; ?>&programa=<?= the_title(); ?>" class="btn btn-default"><i class="fa fa-credit-card-alt"></i> <?php _e("<!--:es-->Comprar<!--:--><!--:en-->Buy Now<!--:--><!--:fr-->Buy Now<!--:--><!--:de-->Buy Now<!--:-->") ?></a>
										<div class="rk_price">
											<p class=""> USD <span><?php the_field("precio") ?>.00</span></p> 
										</div>
									</div>
								</div>
								<!-- <div class="row rk_bottom_flex">
									<div class="col-md-6">
										<div class="package-details-btn text-center">
											<a href="<?php the_permalink(); ?>" class="btn btn-more"><i class="fa fa-angle-double-right"></i> <?php _e("<!--:es-->Leer más<!--:--><!--:en-->See more<!--:--><!--:fr-->See more<!--:--><!--:de-->See more<!--:-->") ?></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="package-details-btn">
											<a href="<?php bloginfo('url'); ?>/book-now?type=1&idPrograma=<?= $post->ID; ?>&programa=<?= the_title(); ?>" class="btn btn-default"><i class="fa fa-credit-card-alt"></i> <?php _e("<!--:es-->Comprar<!--:--><!--:en-->Buy Now<!--:--><!--:fr-->Buy Now<!--:--><!--:de-->Buy Now<!--:-->") ?></a>
										</div>
									</div>
								</div> -->
							</section>
						</article>
					</div>
					<?php 
					}
					endwhile; endif; 
					wp_reset_query();
					?>
			</section>
			<section class="row list-package">
				<h2 class="packages-title text-center" style="color: orangered; padding:3rem;"><?php _e("<!--:es-->TOURS MACHU PICCHU POR TREN<!--:--><!--:en-->TOURS MACHU PICCHU BY TRAIN<!--:--><!--:fr-->TOURS MACHU PICCHU BY TRAIN<!--:--><!--:de-->TOURS MACHU PICCHU BY TRAIN<!--:-->") ?> </h2>
					<?php
					query_posts('cat=12');
					if (have_posts()): while (have_posts()) : the_post(); 
					if(get_field('portada')!=""){
				    ?>
					<div class="col-md-4">
						<article class="package">
							<figure class="package-figure">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</figure>
							<section class="package-details">
								<p class="package-details-title"><strong><?php the_title(); ?></strong></p>
								<div class="rk_text">
									<?php the_excerpt(); ?>
								</div>								 
								<div class="rk_bottom_flex">
									<div class="package-details-btn text-center">
										<a href="<?php the_permalink(); ?>" class="btn btn-more"><i class="fa fa-angle-double-right"></i> <?php _e("<!--:es-->Leer más<!--:--><!--:en-->See more<!--:--><!--:fr-->See more<!--:--><!--:de-->See more<!--:-->") ?></a>
									</div>
									<div class="package-details-btn">
										<a href="<?php bloginfo('url'); ?>/book-now?type=1&idPrograma=<?= $post->ID; ?>&programa=<?= the_title(); ?>" class="btn btn-default"><i class="fa fa-credit-card-alt"></i> <?php _e("<!--:es-->Comprar<!--:--><!--:en-->Buy Now<!--:--><!--:fr-->Buy Now<!--:--><!--:de-->Buy Now<!--:-->") ?></a>
										<div class="rk_price">
											<p class=""> USD <span><?php the_field("precio") ?>.00</span></p> 
										</div>
									</div>
								</div>
								<!-- <div class="row rk_bottom_flex">
									<div class="col-md-6">
										<div class="package-details-btn text-center">
											<a href="<?php the_permalink(); ?>" class="btn btn-more"><i class="fa fa-angle-double-right"></i> <?php _e("<!--:es-->Leer más<!--:--><!--:en-->See more<!--:--><!--:fr-->See more<!--:--><!--:de-->See more<!--:-->") ?></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="package-details-btn">
											<a href="<?php bloginfo('url'); ?>/book-now?type=1&idPrograma=<?= $post->ID; ?>&programa=<?= the_title(); ?>" class="btn btn-default"><i class="fa fa-credit-card-alt"></i> <?php _e("<!--:es-->Comprar<!--:--><!--:en-->Buy Now<!--:--><!--:fr-->Buy Now<!--:--><!--:de-->Buy Now<!--:-->") ?></a>
										</div>
									</div>
								</div> -->
							</section>
						</article>
					</div>
					<?php 
					}
					endwhile; endif; 
					wp_reset_query();
					?>
			</section>
		</div>
	</section>

	<section class="packages" style="background: #fff; border-top: 1px solid #dedede">
		<div class="container-fluid">
			<header class="packages-header container">
				<h2 class="packages-title"><?php _e("<!--:es-->Tours de 1 día y Medio día  en Cusco – Perú viaja más!!<!--:--><!--:en-->1 Day and Half Day Tours in Cusco - Peru travels more !!<!--:--><!--:fr-->1 Day and Half Day Tours in Cusco - Peru travels more !!<!--:--><!--:de-->1 Day and Half Day Tours in Cusco - Peru travels more !!<!--:-->") ?> </h2>
				<h3><?php _e("[:es]Excitantes viajes en Cusco vive la Aventura, formaciones naturales, trekking, Lagunas, Cóndores[:en]Exciting trips in Cusco live the Adventure, natural formations, trekking, Lake[:fr]Exciting trips in Cusco live the Adventure, natural formations, trekking, Lake[:de]Exciting trips in Cusco live the Adventure, natural formations, trekking, Lake[:]") ?></h3>
				<h4><?php _e("[:es]Toca el cielo <strong> junto con los Cóndores </strong> y piérdete en el atardecer del sol, paisajes increíbles sobre los andes! Si buscas algo más. Aquí te presentamos <strong> programas de 1 día y  medio día</strong>, no viajes mucho, ni camines mucho, solo déjate llevar y verás que no es un sueño todo lo que puedes hacer en <strong> un día</strong>, elije tu destino ahora!!![:en]Touch the sky with the Condors and get lost in the sunset, amazing landscapes on the Andes! If you are looking for something more. Here we present you programs of 1 day and a half day, there is not much trip, nor walk much, just let yourself be taken and you will see that it is not a dream everything you can do in one day, choose your destination now !!![:fr]Touch the sky with the Condors and get lost in the sunset, amazing landscapes on the Andes! If you are looking for something more. Here we present you programs of 1 day and a half day, there is not much trip, nor walk much, just let yourself be taken and you will see that it is not a dream everything you can do in one day, choose your destination now !!![:de]Touch the sky with the Condors and get lost in the sunset, amazing landscapes on the Andes! If you are looking for something more. Here we present you programs of 1 day and a half day, there is not much trip, nor walk much, just let yourself be taken and you will see that it is not a dream everything you can do in one day, choose your destination now !!![:]") ?></h4>
			</header>
			<section class="row list-package">
					<?php
					query_posts('cat=7');
					if (have_posts()): while (have_posts()) : the_post(); ?>
					<div class="col-md-3">
						<article class="package">
							<?php if(get_field("tipo")!=""){ ?>
							<?php } ?>
							<figure class="package-figure">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</figure>
							<section class="package-details">
								<p class="package-details-title"><strong><?php the_title(); ?></strong></p>
								<div class="rk_text"> <?php the_excerpt(); ?></div> 
								
								<div class="rk_bottom_flex">
									<div class="package-details-btn text-center">
										<a href="<?php the_permalink(); ?>" class="btn btn-more"><i class="fa fa-angle-double-right"></i> <?php _e("<!--:es-->Leer más<!--:--><!--:en-->See more<!--:--><!--:fr-->See more<!--:--><!--:de-->See more<!--:-->") ?></a>
									</div>
									<div class="package-details-btn">
										<a href="<?php bloginfo('url'); ?>/book-now?type=1&idPrograma=<?= $post->ID; ?>&programa=<?= the_title(); ?>" class="btn btn-default"><i class="fa fa-credit-card-alt"></i> <?php _e("<!--:es-->Comprar<!--:--><!--:en-->Buy Now<!--:--><!--:fr-->Buy Now<!--:--><!--:de-->Buy Now<!--:-->") ?></a>
										<div class="rk_price">
											<p class=""> USD <span><?php the_field("precio") ?>.00</span></p> 
										</div>
									</div>
								</div>
								<!-- <div class="row rk_bottom_flex">
									<div class="col-md-6">
										<div class="package-details-btn text-center">
											<a href="<?php the_permalink(); ?>" class="btn btn-more"><i class="fa fa-angle-double-right"></i> <?php _e("<!--:es-->Leer más<!--:--><!--:en-->See more<!--:--><!--:fr-->See more<!--:--><!--:de-->See more<!--:-->") ?></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="package-details-btn">
											<a href="<?php bloginfo('url'); ?>/book-now?type=1&idPrograma=<?= $post->ID; ?>&programa=<?= the_title(); ?>" class="btn btn-default"><i class="fa fa-credit-card-alt"></i> <?php _e("<!--:es-->Comprar<!--:--><!--:en-->Buy Now<!--:--><!--:fr-->Buy Now<!--:--><!--:de-->Buy Now<!--:-->") ?></a>
										</div>
									</div>
								</div> -->
							</section>
						</article>
					</div>
					<?php 
					endwhile; endif; 
					wp_reset_query();
					?>
			</section>
			<section class="row sidebar">
				<?php // dynamic_sidebar('barra_lateral'); ?>
			</section>
		</div>
	</section>

	<section class="packages" style="border-top: 1px solid #dedede">
		<div class="container">
			<header class="packages-header container">
				<h2 class="packages-title"><?php _e("<!--:es-->Caminatas en las montañas de Perú<!--:--><!--:en-->Hiking in the mountain of Peru<!--:--><!--:fr-->Hiking in the mountain of Peru<!--:--><!--:de-->Hiking in the mountain of Peru<!--:-->") ?> </h2>
				<h3><?php _e("[:es]El desafío te espera! trekking por las montañas, nevados y ceja de selva en Perú[:en]The challenge awaits you! trekking through the mountains, snow-capped jungle in Peru[:fr]The challenge awaits you! trekking through the mountains, snow-capped jungle in Peru[:de]The challenge awaits you! trekking through the mountains, snow-capped jungle in Peru[:]") ?> </h3>
				<h4><?php _e("[:es]Son los viajes más fascinantes por ser parte del complemento en la visita a maravilla del mundo Machu Picchu. Estos programas se crearon viendo tu amor por las caminatas, las aventuras, combinado con hermosos nevados, ríos, ceja de selva, baños termales, no pierdas tu tiempo buscando más…Viaja con nosotros!.[:en]They are the most fascinating trips to be part of the complement in the visit to wonder of the Machu Picchu world. These programs were created by seeing your love for the walks, the adventures, combined with beautiful snow-capped mountains, rivers, rainforest, thermal baths, do not waste your time looking for more ... Travel with us !.[:fr]They are the most fascinating trips to be part of the complement in the visit to wonder of the Machu Picchu world. These programs were created by seeing your love for the walks, the adventures, combined with beautiful snow-capped mountains, rivers, rainforest, thermal baths, do not waste your time looking for more ... Travel with us !.[:de]They are the most fascinating trips to be part of the complement in the visit to wonder of the Machu Picchu world. These programs were created by seeing your love for the walks, the adventures, combined with beautiful snow-capped mountains, rivers, rainforest, thermal baths, do not waste your time looking for more ... Travel with us !.[:]") ?> </h4>
			</header>
			<section class="row list-package">
					<?php
					query_posts('cat=5');
					if (have_posts()): while (have_posts()) : the_post(); ?>
					<div class="col-md-4">
						<article class="package">
							<?php if(get_field("tipo")!=""){ ?>
							<?php } ?>
							<figure class="package-figure">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</figure>
							<section class="package-details">
								<p class="package-details-title"><strong><?php the_title(); ?></strong></p>
								<div class="rk_text"> <?php the_excerpt(); ?></div> 
								
								<div class="rk_bottom_flex">
									<div class="package-details-btn text-center">
										<a href="<?php the_permalink(); ?>" class="btn btn-more"><i class="fa fa-angle-double-right"></i> <?php _e("<!--:es-->Leer más<!--:--><!--:en-->See more<!--:--><!--:fr-->See more<!--:--><!--:de-->See more<!--:-->") ?></a>
									</div>
									<div class="package-details-btn">
										<a href="<?php bloginfo('url'); ?>/book-now?type=1&idPrograma=<?= $post->ID; ?>&programa=<?= the_title(); ?>" class="btn btn-default"><i class="fa fa-credit-card-alt"></i> <?php _e("<!--:es-->Comprar<!--:--><!--:en-->Buy Now<!--:--><!--:fr-->Buy Now<!--:--><!--:de-->Buy Now<!--:-->") ?></a>
										<div class="rk_price">
											<p class=""> USD <span><?php the_field("precio") ?>.00</span></p> 
										</div>
									</div>
								</div>
								<!-- <div class="row rk_bottom_flex">
									<div class="col-md-6">
										<div class="package-details-btn text-center">
											<a href="<?php the_permalink(); ?>" class="btn btn-more"><i class="fa fa-angle-double-right"></i> <?php _e("<!--:es-->Leer más<!--:--><!--:en-->See more<!--:--><!--:fr-->See more<!--:--><!--:de-->See more<!--:-->") ?></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="package-details-btn">
											<a href="<?php bloginfo('url'); ?>/book-now?type=1&idPrograma=<?= $post->ID; ?>&programa=<?= the_title(); ?>" class="btn btn-default"><i class="fa fa-credit-card-alt"></i> <?php _e("<!--:es-->Comprar<!--:--><!--:en-->Buy Now<!--:--><!--:fr-->Buy Now<!--:--><!--:de-->Buy Now<!--:-->") ?></a>
										</div>
									</div>
								</div> -->
							</section>
						</article>
					</div>
					<?php 
					endwhile; endif; 
					wp_reset_query();
					?>
			</section>
			<section class="row sidebar">
				<?php // dynamic_sidebar('barra_lateral'); ?>
			</section>
		</div>
	</section>

	<section class="details">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<h4 style="color: #ff8d00"><span><i class="fa fa-bus wt"></i></span> 
						<?php _e("<!--:es-->Tours Organizados por Carro<!--:--><!--:en-->Tours Organized by Car<!--:-->") ?> </h4>
					<div class="col-md-12 sub-package">
						<div class="sub-package-content">
							<figure style="overflow: hidden;" class="img-circle cir1">
								<h2> <?php _e("<!--:es-->Tours en Carro<!--:--><!--:en-->Tours by Car<!--:--><!--:fr-->Tours by Car<!--:--><!--:de-->Tours by Car<!--:-->") ?></h2>
								<?php query_posts('cat=5');
								$i=2;
								if (have_posts()) : while (have_posts()) : the_post();?>
								<figure style="overflow: hidden;" class="img-circle cir-package cir<?= $i++ ?>">
									<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
									<a href="<?php the_permalink();?>" class="imag-circle"> <?php the_post_thumbnail(); ?></a>
								</figure>
								<?php endwhile; endif; 
								wp_reset_query(); ?>
							</figure>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<h4 style="color: #cea95c"><i class="fa fa-certificate"></i> <?php _e("[:es]Certificados[:en]Certificates[:de]Zertifikate[:fr]Certificats[:]") ?> </h4>
					<div class="text-center">
						<a href="https://www.machupicchubycars.com/certificados/">
							<img src="https://www.machupicchubycars.com/wp-content/uploads/certificado-1-202x300.jpg" style="width: 115px; border-radius: 15px; box-shadow: 0px 0px 5px #666; margin-right: 8px; height: 175px"  alt="Certificados Sakura Expeditions">
							<img src="https://www.machupicchubycars.com/wp-content/uploads/constancia-183x300.jpg" style="width: 115px; border-radius: 15px; box-shadow: 0px 0px 5px #666; margin-right: 8px; height: 175px"  alt="Certificados Sakura Expeditions">
							<img src="https://www.machupicchubycars.com/wp-content/uploads/licencia-sakura-expedition-214x300.jpg" style="width: 115px; border-radius: 15px; box-shadow: 0px 0px 5px #666; margin-right: 8px; height: 175px"  alt="Certificados Sakura Expeditions">
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<h4><i class="fa fa-youtube-play"></i> Videos</h4>
					<div class="videos">
						<?php dynamic_sidebar('videos');?>
					</div>
				</div>
				<div class="col-md-3">
					<h4 style="color: #3a5897"><i class="fa fa-facebook-official"></i> Facebook</h4>
					<div class="tours-bycar">
						<?php dynamic_sidebar('aditionals');?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
