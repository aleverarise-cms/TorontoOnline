<?php get_header(); ?>

	<div id="slider">
		<div class="bxslider">
			<?php 

				$arg = array(
					'posts_per_page' => 4,
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post'
				);

				$slider = new WP_Query($arg);
				while ($slider->have_posts()) {
					$slider->the_post();

			?>
				<div><a href="<?= the_permalink() ?>"><?= the_post_thumbnail('destacada') ?></a></div>
			<?php 
				}
				wp_reset_postdata();
			?>
		  	
		</div>
	</div>	


	<div id="queVisitar">
		<?php dynamic_sidebar('front-page'); ?>
	</div>

	<div class="clear"></div>

	<div id="informacionConsejos">
		<div class="informacion">
			<?php 
				$informacion = new WP_Query(array('pagename' => 'informacion'));

				while ($informacion->have_posts()) {
					$informacion->the_post();
			?>
				
				<h2><?= the_title() ?></h2>
				<?= the_excerpt() ?>

			<?php 
				}
				wp_reset_postdata();
			?>
		</div>	
		<div class="consejos">

			<h2>Consejos para viajar a canada</h2>
			<?php 

				$args = array(
					'cat' => 12,
					'posts_per_page' => 2,
					'order' => 'DESC',	
					'orderby' => 'date',
				); 

				$consejos = new WP_Query($args);
				while ($consejos->have_posts()) {
					$consejos->the_post();
			?>

				<div class="consejoContenido">
					<a href="<?= the_permalink() ?>" title="">
						<?= the_post_thumbnail('guia-toronto') ?>
						<h3><?= the_title() ?></h3>
					</a>
					<?= the_excerpt() ?>
				</div>

			<?php 
				}
				wp_reset_postdata();
			?>
		</div>
	</div>

<?php get_footer(); ?>