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
									$posts = get_posts(array(
										'post_type' => 'featured_post',
										'post_status' => 'publish',
										'numberposts' => 4,
										'meta_query' => array(
											'relation' => 'AND',
											'be_featured_post' => array(
												'key' => 'featured_post_location',
												'value' => "features"
											),
											'have_position' => array(
												'key' => 'featured_post_position',
												'type' => 'NUMERIC',
												'compare' => 'EXISTS'
											)
										),
										'orderby' => array (
											'have_position' => 'ASC'
										)
									  ));
									foreach($posts as $post)
									{
										$featuredImageURL = get_the_post_thumbnail_url($post->ID,'full'); 
								?>
									<div class="3u 12u(mobile)">

										<!-- Feature #1 -->
											<section>
												<a href="<?= get_post_meta($post->ID, 'link_url', true) ?>" class="bordered-feature-image"><img src="<?= $featuredImageURL ?>" alt="" /></a>
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
							<?php
									$posts = get_posts(array(
										'post_type' => 'featured_post',
										'post_status' => 'publish',
										'numberposts' => 4,
										'meta_query' => array(
											'relation' => 'AND',
											'be_featured_post' => array(
												'key' => 'featured_post_location',
												'value' => "content"
											),
											'have_position' => array(
												'key' => 'featured_post_position',
												'type' => 'NUMERIC',
												'compare' => 'EXISTS'
											)
										),
										'orderby' => array (
											'have_position' => 'ASC'
										)
									  ));
									foreach($posts as $post)
									{
										$featuredImageURL = get_the_post_thumbnail_url($post->ID,'full'); 
								?>

									<div class="4u 12u(mobile)">

									<!-- Box #1 -->
										<section>
											<header>
												<h2><?= $post->post_title?></h2>
												<h3><?= get_post_meta($post->ID, 'post_sub_title', true) ?></h3>
											</header>
											<a href="<?= get_post_meta($post->ID, 'link_url', true) ?>" class="feature-image"><img src="<?= $featuredImageURL ?>" alt="" /></a>
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
                
<?php get_footer(); ?>
