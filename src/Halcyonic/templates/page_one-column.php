<?php
/*
Template Name: One Column Page
*/
get_header(); ?>


<!-- Content -->
<div id="content-wrapper">
					<div id="content">
						<div class="container">
							<div class="row">
								<div class="12u">

                                <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
									<!-- Main Content -->
										<section>
											<header>
												<h2><?= the_title(); ?></h2>
												<h3><?= (has_excerpt() ? get_the_excerpt() : "") ?></h3>
											</header>
											<?= the_content(); ?>
                                        </section>
                                        
                                    <?= endwhile; endif; ?>

								</div>
							</div>
						</div>
					</div>
                </div>
                
<?= get_footer(); ?>
