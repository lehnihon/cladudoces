<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">		
				<?php putRevSlider( "banner-index" ) ?>		
			</div>
		</div>
	</section>

	<section id="sobre-home">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Cladu Doces</h1>
					<h2>Doceria e Confeitaria</h2>
				</div>
			</div> <br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p>
						Somos uma doceria especializada em confeitaria de bolos, brigadeiros gourmet, guloseimas, cestas, bombons, tortas, sobremesas, doces finos, pães de mel, trufas, cupcake 
e kit-festas. 
					</p>
					<p>
						A Cladu Doces também faz festas personalizadas e decoração para datas especiais como Dia das Mães, namorados, amigo e festas em geral. O cardápio da Cladu Doces é 
repleto de delícias irresistíveis, trabalhamos apenas os melhores ingredientes e o que há de melhor em qualidade no mercado de doces, sempre acrescentando em nossas 
receitas grande quantidade de amor, recheada com dedicação e coberta de qualidade.
					</p>
				</div>
		</div>
	</section>

	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<h2 class="amarelo">Doceria e Confeitaria</h2>
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
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-1.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-2.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-3.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-4.jpg"; ?>"/>
						</div>
					</div>
			
				</div>
			</div>	
		</div>	
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
