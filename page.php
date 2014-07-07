<?php get_header(); ?>

		<section id="blog">
			<article class="container">

				<div class="row">
					<div class="left col-md-9">
					
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<!-- article title -->
						<header>
							<h1><?php the_title(); ?></h1>
							<small class="fsize13">
								<!-- <a href="blog.html" class="label label-default light"><i class="fa fa-dot-circle-o"></i><?php //the_categories(); ?></a> -->
								<!-- <a href="#comments" class="scrollTo label label-default light"><i class="fa fa-comment-o"></i><?php //the_title(); ?></a> -->
								<span class="label label-default light"><?php the_time('l, F j, Y'); ?></span>
							</small>
						</header>

						<!-- image -->
						<figure>
							<?php if( has_post_thumbnail() ) { ?>
										<?php the_post_thumbnail( 'Blog' ); ?>
							<?php } ?>
						</figure>


						<!-- article content -->
						<article>
							<?php the_content(); ?>
						</article>
						
						<?php endwhile; else: ?>
							<p><?php _e('Sorry, this page does not exist.'); ?></p>
						<?php endif; ?>

						<div class="divider"><!-- lines divider --></div>

						
						<hr /><!-- divider -->

					</div>


					<!-- SIDEBAR -->
					<div class="right col-md-3">
					
						<?php get_sidebar(); ?>
						
					</div>
					<!-- /SIDEBAR -->

				</div>

			</article>
		</section>
		<!-- /BLOG -->

<?php get_footer(); ?>