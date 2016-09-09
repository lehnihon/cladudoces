<?php
get_header(); ?>

<div id="content">

	<section id="sobre">
		<div class="container">
			<h1 class="title-full small"><div class="animated bounceIn">Nossos Doces</div></h1>
			<h4>Confira as fotos dos doces que produzimos com muito carinho e qualidade.</h4><br><br>
			<div class="row">
				<div class="col-md-12">
					<?php 
					$args = array('posts_per_page' => 20,'post_type' => 'fotos');
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php
							$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );
							$post_ids[] = $post->ID;
							?>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php
					$id = array_rand($post_ids);
					$thumbnail_src_principal = wp_get_attachment_image_src( get_post_thumbnail_id( $post_ids[$id] ),'home-thumb' );
					?>
					<img class="img-responsive" src="<?php echo $thumbnail_src_principal[0]; ?>">
					<div class="slider1">
					<?php 
					$args = array('posts_per_page' => 20,'post_type' => 'fotos');
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php
							$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'mini-thumb' );
							?>
							<div class="slide"><a data-lightbox="prod" href="<?php echo $thumbnail_src[0]; ?>"><img src="<?php echo $thumbnail_src[0]; ?>"></a></div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
</div>

<?php get_footer(); ?>

<script>
$('.slider1').bxSlider({
    slideWidth: 2000,
    minSlides: 4,
    maxSlides: 4,
    infiniteLoop: false,
    slideMargin: 10,
    controls:false,
	onSliderLoad: function(){
	    $(".bx-clone").children().removeAttr("data-lightbox");
	}
});

</script>