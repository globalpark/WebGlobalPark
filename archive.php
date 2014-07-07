<?php get_header(); ?>

		<section id="titulo">
			<div class="container">
				<div class="row">						
						<div class="col-xs-12">
							<?php if (is_category()) { ?>
							<h1 class="big-title"><?php single_cat_title(); ?></h1>
							<?php } elseif (is_tag()) { ?> 
							<h1 class="big-title"><?php single_tag_title(); ?></h1>
							<?php } elseif (is_author()) { ?>
							<h1 class="big-title"><?php get_the_author_meta(); ?></h1>
							<?php } elseif (is_day()) { ?>
							<h1 class="big-title"><?php the_time('l, F j, Y'); ?></h1>
							<?php } elseif (is_month()) { ?>
							<h1 class="big-title"><?php the_time('F Y'); ?></h1>
							<?php } elseif (is_year()) { ?>
							<h1 class="big-title"><?php the_time('Y'); ?></h1>
							<?php } ?>
						</div>
				</div>
			</div>
		</section>



		<!-- BLOG -->
		<section id="blog">
			<article class="container">

				<div class="row">
					<div class="left col-md-9">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


						<!-- blog item -->
						<div class="item row">

							<!-- article title -->
							<div class="item-title col-xs-12">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<span class="label label-default light fsize13"><?php the_category(', '); ?></span> 
								<!-- <a href="blog-post.html#comments" class="scrollTo label label-default light"><i class="fa fa-comment-o"></i> 3 comentarios</a> -->
								<span class="label label-default light fsize13"><?php the_time('l, F j, Y'); ?></span>
							</div>

							<!-- image -->
							
							<?php if( has_post_thumbnail() ) { ?>
								<div class="col-xs-5">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<figure>
										<?php the_post_thumbnail(); ?>
								</figure>
								</a>
								</div>
							<?php } ?>
							

							<!-- blog short preview -->
							<div class="col-xs-7">
							<p>
								<?php the_excerpt(); ?>
							</p>

							<!-- read more button -->
							<a href="<?php the_permalink(); ?>" class="btn btn-xs"><i class="fa fa-sign-out"></i>Más</a>
							</div>
						</div>
						<!-- /blog item -->
						
						<?php endwhile; ?>
						
						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi('<div class="text-center"><ul class="pagination">','</ul></div>' ); // use the page navi function ?>

						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<div class="text-center">
								<ul class="pagination">
									<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
									<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
								</ul>
							</div>
						<?php } ?>
						
						<?php else : ?>
					
						<article id="post-not-found">
						    <header>
						    	<h1><?php _e("Lo que está buscando no existe.", "wpbootstrap"); ?></h1>
						    </header>
						    <section class="post_content">
						    	<p><?php _e("", "wpbootstrap"); ?></p>
						    </section>
						</article>
					
					<?php endif; ?>


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