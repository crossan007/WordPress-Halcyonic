<?php get_header(); ?>

<!-- Banner --> 
<div id="banner-wrapper">
	<div id="banner">
		<div class="container">
			<div class="row">
				<div class="6u 12u(mobile)">

					<!-- Banner Copy -->
						<p><?= get_bloginfo("description")?></p>
						
						<?php
							$menuLocations = get_nav_menu_locations(); 
							$menuID = $menuLocations['big-button'];
							$primaryNav = wp_get_nav_menu_items($menuID);
							//print_r($primaryNav);
							
						?>

						<a href="<?= $primaryNav[0]->url ?>" class="button-big"><?= $primaryNav[0]->post_title ?><a>

				</div>
				<div class="6u 12u(mobile)">

					<!-- Banner Image -->
						<a href="#" class="bordered-feature-image"><img src="https://html5up.net/uploads/demos/halcyonic/images/banner.jpg" alt="" /></a>

				</div>
			</div>
		</div>
	</div>

</div>

<!-- Features -->
<div id="features-wrapper">
					<div id="features">
						<div class="container">
							<div class="row">
								<?php
									$posts = get_posts([
										'post_type' => 'featured_post',
										'post_status' => 'publish',
										'numberposts' => 4
										// 'order'    => 'ASC'
									  ]);
									foreach($posts as $post)
									{
								?>
									<div class="3u 12u(mobile)">

										<!-- Feature #1 -->
											<section>
												<a href="<?= get_post_meta($post->ID, 'link_url', true) ?>" class="bordered-feature-image"><img src="<?= get_post_meta($post->ID, 'image_url', true) ?>" alt="" /></a>
												<h2><?= $post->post_title?></h2>
												<p>
													<?= $post->post_content?>
												</p>
											</section>

									</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</div>

			<!-- Content -->
				<div id="content-wrapper">
					<div id="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u(mobile)">

									<!-- Box #1 -->
										<section>
											<header>
												<h2>Who We Are</h2>
												<h3>A subheading about who we are</h3>
											</header>
											<a href="#" class="feature-image"><img src="images/pic05.jpg" alt="" /></a>
											<p>
												Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed.
												Suspendisse eu varius nibh. Suspendisse vitae magna eget odio amet mollis
												justo facilisis quis. Sed sagittis mauris amet tellus gravida lorem ipsum.
											</p>
										</section>

								</div>
								<div class="4u 12u(mobile)">

									<!-- Box #2 -->
										<section>
											<header>
												<h2>What We Do</h2>
												<h3>A subheading about what we do</h3>
											</header>
											<ul class="check-list">
												<li>Sed mattis quis rutrum accum</li>
												<li>Eu varius nibh suspendisse lorem</li>
												<li>Magna eget odio amet mollis justo</li>
												<li>Facilisis quis sagittis mauris</li>
												<li>Amet tellus gravida lorem ipsum</li>
											</ul>
										</section>

								</div>
								<div class="4u 12u(mobile)">

									<!-- Box #3 -->
										<section>
											<header>
												<h2>What People Are Saying</h2>
												<h3>And a final subheading about our clients</h3>
											</header>
											<ul class="quote-list">
												<li>
													<img src="images/pic06.jpg" alt="" />
													<p>"Neque nisidapibus mattis"</p>
													<span>Jane Doe, CEO of UntitledCorp</span>
												</li>
												<li>
													<img src="images/pic07.jpg" alt="" />
													<p>"Lorem ipsum consequat!"</p>
													<span>John Doe, President of FakeBiz</span>
												</li>
												<li>
													<img src="images/pic08.jpg" alt="" />
													<p>"Magna veroeros amet tempus"</p>
													<span>Mary Smith, CFO of UntitledBiz</span>
												</li>
											</ul>
										</section>

								</div>
							</div>
						</div>
					</div>
                </div>
                
<?php get_footer(); ?>
