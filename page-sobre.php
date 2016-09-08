<?php
get_header(); ?>

<div id="content">
	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<h1 class="small">Doceria e Confeitaria</h1>
					<p class="">Temos o presente certo para adoçar as relações!<br>
						Trabalhamos apenas com o que a de melhor em qualidade no mercado de doces. <br>
						Nosso chocolate é belga, pois acreditamos que a qualidade é o segredo da satisfação.
					</p>
					<ul>
						<li>Bolos personalizados</li>
						<li>Kit-festas</li>
						<li>Doces finos</li>
						<li>Guloseimas</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>" class="btn-saiba-mais">CONTATO</a>
				</div>
				<div class="col-md-5 text-left">
					
					<div class="row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-3.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-3.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-3.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-3.jpg"; ?>"/>
						</div>
					</div>
			
				</div>	
			</div>	
		</div>	
	</section>


	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
