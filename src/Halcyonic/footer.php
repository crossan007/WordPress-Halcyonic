				<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="8u 12u(mobile)">

								<!-- Links -->
									<section>
										<h2>Links to Important Stuff</h2>
										<?php
											$menuLocations = get_nav_menu_locations();
											$menuID = $menuLocations["bottom-menu"];
											$menuItems = wp_get_nav_menu_items($menuID);
											$topMenuItems = array_filter($menuItems, array(new menuParentIDFilter(0),"equals"));
										?>
										<div>
											<div class="row">
												<?php foreach ($topMenuItems as $menuItem)
												{
													?>
													<div class="3u 12u(mobile)">
													<ul class="link-list last-child">
														<?php
															echo "<li><a href=\"".$menuItem->url."\">".$menuItem->post_title."</a></li>";
															foreach (array_filter($menuItems, array(new menuParentIDFilter($menuItem->ID),"equals")) as $subMenuItem)
															{
																echo  "<li><a href=\"".$subMenuItem->url."\">".$subMenuItem->post_title."</a></li>";
															}
														?>
													</ul>
													</div>
													<?php
												}
												?>
											</div>
										</div>
									</section>

							</div>
							<?php
								$post = get_posts(array(
									'post_type' => 'featured_post',
									'post_status' => 'publish',
									'numberposts' => 1,
									'meta_key' => "featured_post_location",
									'meta_value' => 'footer-blurb'
								))[0];
								if ($post) {
								?>
									<div class="4u 12u(mobile)">
										<!-- Blurb -->
										<section>
											<h2><?= $post->post_title ?></h2>
											<p>
												<?= $post->post_content ?>
											</p>
										</section>

									</div>
								<?php
								}
								?>
						</div>
					</footer>
				</div>

			<!-- Copyright -->
				<div id="copyright">
					&copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a> | WordPress Theme: <a href="https://www.ccrossan.com">Charles Crossan</a>
				</div>

		</div>

		<!-- Scripts -->
			<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/skel.min.js"></script>
			<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/skel-viewport.min.js"></script>
			<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/main.js"></script>
            <?php wp_footer(); ?>
	</body>
</html>