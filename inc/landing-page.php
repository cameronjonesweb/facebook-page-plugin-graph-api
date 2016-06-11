<?php defined( 'ABSPATH' ) or die();
$currentuser = wp_get_current_user();
$internet = $this->facebook_page_plugin_is_connected(); ?>
<div class="wrap">
	<div class="welcome-panel">
		<div class="welcome-panel-content">
			<img src="<?php echo CJW_FBPP_PLUGIN_URL; ?>/images/banner-772x250.jpg" class="welcome-panel-image">
			<p class="about-description"><?php _e( 'Thank you for downloading the Facebook Page Plugin by cameronjonesweb! You\'ve joined more than 10,000 other WordPress websites using this plugin to display a Facebook Page on their site. To help introduce you to the plugin, I\'ve created this page full of useful information. Please enjoy using my Facebook Page Plugin and let me know how it works for you!', 'facebook-page-feed-graph-api' ); ?></p>
		</div>
	</div>
	<div id="dashboard-widgets-wrap">
		<div id="dashboard-widgets" class="metabox-holder">
			<div id="postbox-container-1" class="postbox-container">
				<div class="meta-box-sortables">
					<div class="postbox">
						<div class="main inside">
							<h2><abbr title="Frequently Asked Questions"><?php _e( 'FAQs', 'facebook-page-feed-graph-api' ); ?></abbr></h2>
							<ul>
								<li>
									<strong><?php _e( 'Where is the settings page?', 'facebook-page-feed-graph-api' ); ?></strong>
									<p><?php _e( 'There isn\'t one.', 'facebook-page-feed-graph-api' ); ?></p>
								</li>
								<li>
									<strong><?php _e( 'Something\'s broken, where do I get help?', 'facebook-page-feed-graph-api' ); ?></strong>
									<p><?php echo __( 'You can go to', 'facebook-page-feed-graph-api' ) . ' <a href="https://wordpress.org/support/plugin/facebook-page-feed-graph-api" target="_blank">https://wordpress.org/support/plugin/facebook-page-feed-graph-api</a>' . __(' and create a support ticket on WordPress.org, or you can email the developer at ', 'facebook-page-feed-graph-api' ) . '<a href="mailto:plugins@cameronjonesweb.com.au" target="_blank">plugins@cameronjonesweb.com.au</a>.'; ?></p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="postbox-container-2" class="postbox-container">
				<div class="meta-box-sortables">
					<div class="postbox">
						<div class="main inside">
							<h3><i class="dashicons dashicons-heart"></i> <?php _e( 'Donate', 'facebook-page-feed-graph-api' ); ?></h3>
							<p><?php _e( 'Development relies on donations from kind-hearted supporters of the Facebook Page Plugin. If you\'re enjoying the plugin,', 'facebook-page-feed-graph-api' ); ?> <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=WLV5HPHSPM2BG&lc=AU&item_name=cameronjonesweb%20-%20Facebook%20Page%20Plugin&¤cy_code=AUD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank"><?php _e( 'please donate today', 'facebook-page-feed-graph-api' ); ?></a>.</p>
						</div>
					</div>
					<div class="postbox">
						<div class="main inside">
							<h3><i class="dashicons dashicons-email-alt"></i> <?php _e( 'Plugin Newsletter', 'facebook-page-feed-graph-api' ); ?></h3>
							<p><?php _e( 'Subscribe today to receive the latest updates for the Facebook Page Plugin', 'facebook-page-feed-graph-api' ); ?></p>
							<!-- Begin MailChimp Signup Form -->
							<div id="mc_embed_signup">
							<form action="//cameronjonesweb.us10.list-manage.com/subscribe/post?u=507cd0221f4894316c903e99b&amp;id=8d3d7b8378" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll">
									<input type="email" value="<?php echo $currentuser->user_email; ?>" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
								    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_507cd0221f4894316c903e99b_8d3d7b8378" tabindex="-1" value=""></div>
								    <input type="submit" value="<?php _e( 'Subscribe', 'facebook-page-feed-graph-api' ); ?>" name="subscribe" id="mc-embedded-subscribe" class="button">
								    <div class="clear"></div>
							    </div>
							</form>
							</div>
							<!--End mc_embed_signup-->
						</div>
					</div>
					<div class="postbox">
						<div class="main inside">
							<h3><i class="dashicons dashicons-star-filled"></i> <?php _e( 'Leave A Review', 'facebook-page-feed-graph-api' ); ?></h3>
							<p><?php _e( 'Is this the best plugin for adding a Facebook Page to your WordPress website?', 'facebook-page-feed-graph-api' ); ?> <a href="https://wordpress.org/support/view/plugin-reviews/facebook-page-feed-graph-api#postform" target="_blank"><?php _e( 'Let me know', 'facebook-page-feed-graph-api' ); ?></a>!</p>
							<p><?php echo __( 'If there\'s a problem, please open a support ticket on', 'facebook-page-feed-graph-api' ) . ' <a href="https://github.com/cameronjonesweb/facebook-page-feed-graph-api/issues" target="_blank">' . __( 'GitHub', 'facebook-page-feed-graph-api' ) . '</a>' . __( ', on', 'facebook-page-feed-graph-api' ) . ' <a href="https://wordpress.org/support/plugin/facebook-page-feed-graph-api" target="_blank">' . __( 'WordPress.org', 'facebook-page-feed-graph-api' ) . '</a>' . __( ' or ', 'facebook-page-feed-graph-api' ) . '<a href="mailto:plugins@cameronjonesweb.com.au" target="_blank">' . __( 'email me', 'facebook-page-feed-graph-api' ) . '</a>.'; ?></p>
						</div>
					</div>
					<div class="postbox">
						<div class="main inside">
							<h3><i class="dashicons dashicons-chart-line"></i> <?php _e( 'Take The Survey', 'facebook-page-feed-graph-api' ); ?></h3>
							<p><?php _e( 'Want to have your say about the Facebook Page Plugin?', 'facebook-page-feed-graph-api' ); ?></p>
							<p><a href="https://cameronjonesweb.typeform.com/to/BllbYm" class="button" target="_blank"><?php _e( 'Take The Survey!', 'facebook-page-feed-graph-api' ); ?></a></p>
						</div>
					</div>
					<div class="postbox">
						<div class="main inside" id="plugins-inside">
							<h3><i class="dashicons dashicons-admin-plugins"></i> <?php _e( 'More Plugins by cameronjonesweb', 'facebook-page-feed-graph-api' ); ?></h3>
							<p><?php _e( 'Help support the developer by using more of his plugins!', 'facebook-page-feed-graph-api' ); ?></p>
							<?php add_thickbox(); ?>
						</div>
					</div>
					<div class="postbox">
						<div class="main inside" id="blog-posts-inside">
							<h3><i class="dashicons dashicons-testimonial"></i> <?php _e( 'Latest News From The Developer', 'facebook-page-feed-graph-api' ); ?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>