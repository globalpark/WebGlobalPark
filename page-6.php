<?php
//Template Name: Consejo Abierto
?>
<?php get_header(); ?>
		

<!-- BLOG -->
		<section id="blog">
			<article class="container">

				<div class="row"> <!-- row -->
					<div class="left col-md-9">
					
						<?php $the_query1 = new WP_Query('showposts=7'); ?>
						
						
						<!-- carousel -->
						<div >
							<!-- <h1 style="padding: 10px;"></h1> -->
							<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="true" data-autoheight="false" data-transition="fade" style="padding-bottom:40px;">
								<?php if ($the_query1->have_posts()) : while ($the_query1->have_posts()) : $the_query1->the_post(); ?>					
								<div class="item row">
									<a href="<?php the_permalink(); ?>">
									<?php if( has_post_thumbnail() ) { ?>
											<?php the_post_thumbnail( 'Slider' ); ?></a>
									<?php } else { ?>
										<img src="http://consejomotiva.org/wp-content/themes/motivawp/assets/images/motiva/slidedefault.png" class="img-responsive" alt="img" /></a>
									<?php } ?>
									<div class="caption"><h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5></div>
								</div>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div> <!-- /carousel -->

						<div class="row"><!-- middle row -->

							<!-- 1 -->
							<div class="col-xs-12">
							<div class="row">
							<div class="col-sm-4"><!-- col -->
								<!-- carousel seccion 1 -->
								<a href="http://consejomotiva.org/category/eventos"><h3 style="padding: 10px;">Eventos</h3></a>
								<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="false" data-autoheight="true" data-transition="fade" style="padding-bottom:40px;">
								<?php $the_query2 = new WP_Query('showposts=5&cat=3,7,9,29'); ?>
								<?php if ($the_query2->have_posts()) : while ($the_query2->have_posts()) : $the_query2->the_post(); ?>
								<div class="item row" style="overflow:hidden;">

									<!-- article title -->

									<!-- image -->
									<?php $title = get_the_title(); ?>
									<?php if( has_post_thumbnail() && strlen($title) < 50 ) { ?>
										<div class="col-xs-12">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<figure>
												<?php the_post_thumbnail('thumbnail'); ?>
										</figure>
										</a>
										</div>
									<?php } ?>
									
									<div class="col-xs-12">
									<!-- blog short preview -->
									<p>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<?php the_excerpt(); ?>
									</p>

									<!-- read more button -->
									<a href="<?php the_permalink(); ?>" class="btn btn-xs"><i class="fa fa-sign-out"></i>Más</a>
									</div>
								</div>
								
								<!-- /blog item -->

								<?php endwhile; ?>
								<?php endif; ?>
								</div><!-- / carousel sección 1 -->
							</div><!-- /col -->

							<div class="col-sm-4"><!-- col -->
								<!-- carousel seccion 2-->
								<a href="http://consejomotiva.org/category/datos"><h3 style="padding: 10px;">Datos</h3></a>
								<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="false" data-autoheight="true" data-transition="fade" style="padding-bottom:40px;">
								<?php $the_query3 = new WP_Query('showposts=5&cat=73'); ?>
								<?php if ($the_query3->have_posts()) : while ($the_query3->have_posts()) : $the_query3->the_post(); ?>
								<div class="item row" style="overflow:hidden;">

									<!-- article title -->

									<!-- image -->
									
									<?php $title = get_the_title(); ?>
									<?php if( has_post_thumbnail() && strlen($title) < 50 ) { ?>
										<div class="col-xs-12">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<figure>
												<?php the_post_thumbnail('thumbnail'); ?>
										</figure>
										</a>
										</div>
									<?php } ?>
									
									<div class="col-xs-12">
									<!-- blog short preview -->
									<p>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<?php the_excerpt(); ?>
									</p>

									<!-- read more button -->
									<a href="<?php the_permalink(); ?>" class="btn btn-xs"><i class="fa fa-sign-out"></i>Más</a>
									</div>
								</div>
								
								<!-- /blog item -->

								<?php endwhile; ?>
								<?php endif; ?>
								</div><!-- / carousel sección 2 -->
							</div><!-- /col -->

							<div class="col-sm-4"><!-- col -->
								<!-- carousel seccion 3-->
								<a href="http://consejomotiva.org/category/reportes"><h3 style="padding: 10px;">Reportes</h3></a>
								<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="false" data-autoheight="true" data-transition="fade" style="padding-bottom:40px;">
								<?php $the_query4 = new WP_Query('showposts=5&cat=75,77'); ?>
								<?php if ($the_query4->have_posts()) : while ($the_query4->have_posts()) : $the_query4->the_post(); ?>
								<div class="item row" style="overflow:hidden;">

									<!-- article title -->

									<!-- image -->
									
									<?php $title = get_the_title(); ?>
									<?php if( has_post_thumbnail() && strlen($title) < 50 ) { ?>
										<div class="col-xs-12">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<figure>
												<?php the_post_thumbnail('thumbnail'); ?>
										</figure>
										</a>
										</div>
									<?php } ?>
									
									<div class="col-xs-12">
									<!-- blog short preview -->
									<p>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<?php the_excerpt(); ?>
									</p>

									<!-- read more button -->
									<a href="<?php the_permalink(); ?>" class="btn btn-xs"><i class="fa fa-sign-out"></i>Más</a>
									</div>
								</div>
								
								<!-- /blog item -->

								<?php endwhile; ?>
								<?php endif; ?>
								</div><!-- / carousel sección 3 -->
							</div><!-- /col -->
							</div>
							</div><!-- /1 -->

							<!-- 2 -->
							<div class="col-xs-12">
							<div class="row">
							<div class="col-sm-4"><!-- col -->
								<!-- carousel seccion 1 -->
								<a href="http://consejomotiva.org/category/encuestas"><h3 style="padding: 10px;">Encuestas</h3></a>
								<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="false" data-autoheight="true" data-transition="fade" style="padding-bottom:40px;">
								<?php $the_query2 = new WP_Query('showposts=5&cat=72'); ?>
								<?php if ($the_query2->have_posts()) : while ($the_query2->have_posts()) : $the_query2->the_post(); ?>
								<div class="item row" style="overflow:hidden;">

									<!-- article title -->

									<!-- image -->
									
									<?php $title = get_the_title(); ?>
									<?php if( has_post_thumbnail() && strlen($title) < 50 ) { ?>
										<div class="col-xs-12">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<figure>
												<?php the_post_thumbnail('thumbnail'); ?>
										</figure>
										</a>
										</div>
									<?php } ?>
									
									<div class="col-xs-12">
									<!-- blog short preview -->
									<p>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<?php the_excerpt(); ?>
									</p>

									<!-- read more button -->
									<a href="<?php the_permalink(); ?>" class="btn btn-xs"><i class="fa fa-sign-out"></i>Más</a>
									</div>
								</div>
								
								<!-- /blog item -->

								<?php endwhile; ?>
								<?php endif; ?>
								</div><!-- / carousel sección 1 -->
							</div><!-- /col -->

							<div class="col-sm-4"><!-- col -->
								<!-- carousel seccion 2-->
								<a href="http://consejomotiva.org/category/licitaciones"><h3 style="padding: 10px;">Licitaciones</h3></a>
								<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="false" data-autoheight="true" data-transition="fade" style="padding-bottom:40px;">
								<?php $the_query3 = new WP_Query('showposts=5&cat=74'); ?>
								<?php if ($the_query3->have_posts()) : while ($the_query3->have_posts()) : $the_query3->the_post(); ?>
								<div class="item row" style="overflow:hidden;">

									<!-- article title -->

									<!-- image -->
									
									<?php $title = get_the_title(); ?>
									<?php if( has_post_thumbnail() && strlen($title) < 50 ) { ?>
										<div class="col-xs-12">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<figure>
												<?php the_post_thumbnail('thumbnail'); ?>
										</figure>
										</a>
										</div>
									<?php } ?>
									
									<div class="col-xs-12">
									<!-- blog short preview -->
									<p>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<?php the_excerpt(); ?>
									</p>

									<!-- read more button -->
									<a href="<?php the_permalink(); ?>" class="btn btn-xs"><i class="fa fa-sign-out"></i>Más</a>
									</div>
								</div>
								
								<!-- /blog item -->

								<?php endwhile; ?>
								<?php endif; ?>
								</div><!-- / carousel sección 2 -->
							</div><!-- /col -->

							<div class="col-sm-4"><!-- col -->
								<!-- carousel seccion 3-->
								<a href="http://consejomotiva.org/category/reforma-estatutos-salitam"><h3 style="padding: 10px;">Reforma SALITAM</h3></a>
								<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="false" data-autoheight="true" data-transition="fade" style="padding-bottom:40px;">
								<?php $the_query4 = new WP_Query('showposts=5&cat=76'); ?>
								<?php if ($the_query4->have_posts()) : while ($the_query4->have_posts()) : $the_query4->the_post(); ?>
								<div class="item row" style="overflow:hidden;">

									<!-- article title -->

									<!-- image -->
									
									<?php $title = get_the_title(); ?>
									<?php if( has_post_thumbnail() && strlen($title) < 50 ) { ?>
										<div class="col-xs-12">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<figure>
												<?php the_post_thumbnail('thumbnail'); ?>
										</figure>
										</a>
										</div>
									<?php } ?>
									
									<div class="col-xs-12">
									<!-- blog short preview -->
									<p>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<?php the_excerpt(); ?>
									</p>

									<!-- read more button -->
									<a href="<?php the_permalink(); ?>" class="btn btn-xs"><i class="fa fa-sign-out"></i>Más</a>
									</div>
								</div>
								
								<!-- /blog item -->

								<?php endwhile; ?>
								<?php endif; ?>
								</div><!-- / carousel sección 3 -->
							</div><!-- /col -->
							</div>
							</div><!-- /2 -->


						</div> <!-- /middle row -->

					</div><!-- /col left -->

					<!-- SIDEBAR -->
					<div class="right col-md-3">
					
						<?php get_sidebar(); ?>
						
					</div> <!-- /SIDEBAR -->

				</div> <!-- /row -->

			</article>
		</section>
		<!-- /BLOG -->

<?php get_footer(); ?>