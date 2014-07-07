<?php get_header(); ?>
		

<!-- BLOG -->
		<section id="blog">
			<article class="container">
				<div class="row">
					<div class="col-md-12">
						
							<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="true" data-transition="fade"> <!-- Carousel -->
							<?php 
							// the query
							$the_query = new WP_Query( 'showposts=5' ); ?>
							
							<?php if ( $the_query->have_posts() ) : ?>
							
							  <!-- pagination here -->
							
							  <!-- the loop -->
							  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							  	<div class="item">
							    <?php if( has_post_thumbnail() ) { ?>
							
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<figure style="padding-top:6px;">
										<?php the_post_thumbnail( 'Blog' ); ?>
								</figure>
								</a>
								</div>
								<?php } ?>
							  	
							  	<?php else : ?>
							  		<div class="item">
								  		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="assets/images/1x1.png" class="img-responsive" data-src="holder.js/1200x300/#888:#ccc/auto/" alt="img" /></a>
								  	</div>
							  	<?php endif; ?>
							  <?php endwhile; ?>
							  <!-- end of the loop -->
							  
							  <!-- pagination here -->
							
							  <?php wp_reset_postdata(); ?>
							  <?php endif; ?>
							  </div>
						
					</div>
				</div>

				<div class="row">
					<div class="left col-md-9">
					<?php $the_query = new WP_Query(); ?>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


						<!-- blog item -->
						<div class="item">

							<!-- article title -->
							<div class="item-title">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<span class="label label-default light fsize13"><?php the_category(', '); ?></span> 
								<!-- <a href="blog-post.html#comments" class="scrollTo label label-default light"><i class="fa fa-comment-o"></i> 3 comentarios</a> -->
								<span class="label label-default light fsize13"><?php the_time('l, F j, Y'); ?></span>
							</div>

							<!-- image -->
							
							<?php if( has_post_thumbnail() ) { ?>
							
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<figure>
										<?php the_post_thumbnail( 'Blog' ); ?>
								</figure>
								</a>
						
							<?php } ?>
							

							<!-- blog short preview -->
							<p>
								<?php the_excerpt(); ?>
							</p>

							<!-- read more button -->
							<a href="<?php the_permalink(); ?>" class="btn btn-xs"><i class="fa fa-sign-out"></i>Más</a>

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
						    	<h1><?php _e("No Posts Yet", "wpbootstrap"); ?></h1>
						    </header>
						    <section class="post_content">
						    	<p><?php _e("Sorry, What you were looking for is not here.", "wpbootstrap"); ?></p>
						    </section>
						    <footer>
						    </footer>
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