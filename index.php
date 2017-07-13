<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="container">
			<div class="row d-flex">
				<div class="col-8">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<article class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header card-header d-flex justify-content-between">
							<?php
								the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
							?>

							<span class="post-date"><?php echo the_date(); ?></span>

						</header>

						<?php if (get_the_post_thumbnail() != '') : ?>
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
						<?php endif; ?>

						<div class="card-block">
							<?php the_excerpt(); ?>

							<a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Read More</a>
						</div>

						
					</article>

					<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="col-4">
					<?php dynamic_sidebar('blog-sidebar'); ?>
				</div>
			</div>
			
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>