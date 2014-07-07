<?php get_header(); ?>

		<section id="blog">
			<article class="container">

				<div class="row">
					<div class="left col-md-9">
					
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<!-- article title -->
						<header>
							<a href=""><h1><?php the_title(); ?></h1></a>
							<span class="label label-default light fsize13"><?php the_author_link(); ?></span>
							<span class="label label-default light fsize13"><?php the_category(', '); ?></span>
								<!-- <a href="blog.html" class="label label-default light"><i class="fa fa-dot-circle-o"></i><?php //the_categories(); ?></a> -->
								<!-- <a href="#comments" class="scrollTo label label-default light"><i class="fa fa-comment-o"></i><?php //the_title(); ?></a> -->
							<span class="label label-default light fsize13"><?php the_time('l, F j, Y'); ?></span>
						</header>

						<!-- image -->
						
						<!-- <?php if( has_post_thumbnail() ) { ?>
						<figure>
									<?php //the_post_thumbnail(); ?>
						</figure>
						<?php } ?> -->
						


						<!-- article content -->
						<article>
							<?php the_content(); ?>
						</article>
						
						<?php endwhile;?>
						
						<?php else : ?>
						<article>
							<p><?php _e('Sorry, this page does not exist.'); ?></p>
						</article>
						<?php endif; ?>

						<div class="divider col-md-9" style="width:100%;"><!-- lines divider --></div>
						
						<!-- Post Footer -->
						<div id="post-footer">

						<!-- SOCIAL 
						<div class="socials">
						<p class="socials">
							
							<ul class="social-icons">
								<li class="social-icon" style="display:block; float:left; padding-right:10px;"><a href="<?php echo get_permalink(); ?>" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-via="ConsejoMotiva" data-lang="es" data-count="vertical">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>

								<li class="social-icon" style="display:block; float:left;">
									<div id="fb-root"></div>
										<script>(function(d, s, id) {
											var js, fjs = d.getElementsByTagName(s)[0];
				  							if (d.getElementById(id)) return;
				  							js = d.createElement(s); js.id = id;
				  							js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				  							fjs.parentNode.insertBefore(js, fjs);
										}(document, 'script', 'facebook-jssdk'));</script>
									<div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-type="box_count"></div></li>
                                
              				</ul>
						</p>
						</div> -->

						<!-- TAGS  -->
						<div class="tags">
						<p class="fsize16"> Tags:
						<?php
						$posttags = get_the_tags();
						if ($posttags) {
						  foreach($posttags as $tag) {
						    echo '<a class="label label-default light" href="http://consejomotiva.org/tag/' . $tag->name . '"><i class="fa fa-tags"></i> ' . $tag->name . '</a>'; 
						  }
						}
						?>
						</p>
						</div>

						
						<hr /><!-- divider -->
						</div>
						<!-- /Post Footer -->

						<!-- COMMENTS -->
						<div id="comments" style="width:100%;">
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							
							<div class="fb-comments"data-href="<?php echo the_permalink(); ?>" data-num-posts="5" width="620" mobile="false"></div>
							<!-- <style>.fb-comments, .fb-comments iframe[style], .fb-like-box, .fb-like-box iframe[style] {width: 100% !important;}
							.fb-comments span, .fb-comments iframe span[style], .fb-like-box span, .fb-like-box iframe span[style] {width: 100% !important;}
							</style> -->
							
						</div><!-- /COMMENTS -->

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