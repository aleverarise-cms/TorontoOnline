<?php get_header(); ?>

	
		<div id="primary" class="primary">

			<?php while(have_posts() ): the_post(); ?>

				<div class="post-guia">

					<div class="imagen">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('guia-toronto'); ?>
						</a>
						<div class="categoria">
							<?php the_category(); ?>
						</div>
					</div>

					<div class="contenido">
						<h3><?php the_title(); ?></h3>

						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Leer más</a>
						<div class="clear"></div>
					</div>

					<div class="info-post">
						<p class="autor">Por: <span><?php the_author(); ?> </span></p>
						<p class="fecha"><?php the_time(get_option('date_format')) ; ?></p>
						<div class="clear"></div>
					</div>
				</div>

			<?php endwhile; ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>