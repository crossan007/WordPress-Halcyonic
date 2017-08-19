
<? get_header(); ?>


<!-- Content -->
<div id="content-wrapper">
					<div id="content">
						<div class="container">
							<div class="row">
								<div class="12u">

                                <? if (have_posts() ) : while (have_posts()) : the_post(); ?>
									<!-- Main Content -->
										<section>
											<header>
												<h2><? the_title(); ?></h2>
												<h3>A generic one column layout</h3>
											</header>
											<? the_content(); ?>
                                        </section>
                                        
                                    <? endwhile; endif; ?>

								</div>
							</div>
						</div>
					</div>
                </div>
                
<? get_footer(); ?>
