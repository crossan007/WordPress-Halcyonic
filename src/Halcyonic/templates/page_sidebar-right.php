<?php
/*
Template Name: Right Sidebar
*/
?>
<? get_header(); ?>


<!-- Content -->
<div id="content-wrapper">
					<div id="content">
						<div class="container">
							<div class="row">
								<div class="9u 12u(mobile)">
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

									<!-- Sidebar -->
										<section>
											<header>
												<h2>Magna Phasellus</h2>
											</header>
											<ul class="link-list">
												<li><a href="#">Sed dolore viverra</a></li>
												<li><a href="#">Ligula non varius</a></li>
												<li><a href="#">Nec sociis natoque</a></li>
												<li><a href="#">Penatibus et magnis</a></li>
												<li><a href="#">Dis parturient montes</a></li>
												<li><a href="#">Nascetur ridiculus</a></li>
											</ul>
										</section>
										<section>
											<header>
												<h2>Ipsum Dolor</h2>
											</header>
											<p>
												Vehicula fermentum ligula at pretium. Suspendisse semper iaculis eros, eu aliquam
												iaculis. Phasellus ultrices diam sit amet orci lacinia sed consequat.
											</p>
											<ul class="link-list">
												<li><a href="#">Sed dolore viverra</a></li>
												<li><a href="#">Ligula non varius</a></li>
												<li><a href="#">Dis parturient montes</a></li>
												<li><a href="#">Nascetur ridiculus</a></li>
											</ul>
										</section>

								</div>
							</div>
						</div>
					</div>
                </div>
                
<? get_footer(); ?>
