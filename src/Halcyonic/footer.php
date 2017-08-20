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
							<div class="4u 12u(mobile)">

								<!-- Blurb -->
									<section>
										<h2>An Informative Text Blurb</h2>
										<p>
											Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed. Suspendisse eu
											varius nibh. Suspendisse vitae magna eget odio amet mollis. Duis neque nisi,
											dapibus sed mattis quis, sed rutrum accumsan sed. Suspendisse eu varius nibh
											lorem ipsum amet dolor sit amet lorem ipsum consequat gravida justo mollis.
										</p>
									</section>

							</div>
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