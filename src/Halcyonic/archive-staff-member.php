<?php
/*
 Single Staff Member
 This enables display of staff-member pages from the plugin: https://wordpress.org/plugins/simple-staff-list/
*/
get_header(); 
?>
<!-- Content -->
<div id="content-wrapper">
	<div id="content">
		<div class="container">
			<div class="row">
			<?php
				if(have_posts())
				{
					while(have_posts()) {
						the_post();
						$custom     = get_post_custom();
						$t_name         = get_the_title();
						$name_slug  = basename(get_permalink());
						$title      = $custom["_staff_member_title"][0];
						$email      = $custom["_staff_member_email"][0];
						$phone      = $custom["_staff_member_phone"][0];
						$fax        = $custom["_staff_member_fax"][0];
						$bio        = $custom["_staff_member_bio"][0];
						$prof       = $custom["_staff_member_prof"][0];
						$fb_url     = $custom["_staff_member_fb"][0];
						$tw_handle  =  $custom["_staff_member_tw"][0];
						$tw_url     = 'http://www.twitter.com/' . $tw_handle;
						$li_url     = $custom["_staff_member_li"][0];
						if(has_post_thumbnail()){
							
						   $t_photo_url = wp_get_attachment_url( get_post_thumbnail_id() );
						   $t_photo = '<img class="staff-member-page-photo" style="width:100px;height:100px;" src="'.$t_photo_url.'" alt = "'.$title.'">';
						   }else{
						   $t_photo_url = '';
						   $t_photo = '';
						   }
						   $email_mailto = '<a class="staff-member-email" href="mailto:'.antispambot( $email ).'" title="Email '.$name.'">'.antispambot( $email ).'</a>';
						   
					?>
						<div class="3u 12u(mobile)" style="height:310px; overflow:hidden;">
							<section style="padding:5px;">
								<?=$t_photo?>
								<header><h2><?=$t_name?></h2><h3><?=$title?></h3></header>
								<ul>
									<?php if($fb_url) { ?><li><a href="<?=$fb_url?>">Facebook</a></li><?php } ?>
									<?php if($tw_handle) { ?><li><a href="<?=$tw_url?>">Twitter: @<?= $tw_handle?></a></li><?php } ?>
									<?php if($email) { ?><li><a href="mailto:<?=$email?>">Email: <?= $email ?></a></li><?php } ?>
								</ul>
								<a style="float:right" href="<?=$name_slug?>">Read More</a>
							</section>
						</div>
					<?php 
					}
				} ?>
			</div>
		</div>
	</div>
</div>
                
<?= get_footer(); ?>
