<?php
/*
Template Name: Three Column Page
*/
?>
<? get_header(); ?>


<!-- Content -->
<div id="content-wrapper">
					<div id="content">
						<div class="container">
							<div class="row">
								<div class="3u 12u(mobile)">
									<?php dynamic_sidebar('Three Column Page Layout - Left'); ?>
								</div>
								<div class="6u 12u(mobile) important(mobile)">
                                	<? if (have_posts() ) : while (have_posts()) : the_post(); ?>
									<!-- Main Content -->
										<section>
											<header>
												<h2><? the_title(); ?></h2>
												<h3><?= (has_excerpt() ? get_the_excerpt() : "") ?></h3>
											</header>
											<? the_content(); ?>
                                        </section>
                                        
                                    <? endwhile; endif; ?>
								</div>
								<div class="3u 12u(mobile)">
									<?php dynamic_sidebar('Three Column Page Layout - Right'); ?>
								</div>
							</div>
						</div>
					</div>
                </div>
<? get_footer(); ?>
