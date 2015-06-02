<?php
/*
 * Template Name: User Dashboard
 *
 * This template must be assigned to a page
 * in order for it to work correctly
 *
*/
// $current_user = wp_get_current_user(); // grabs the user info and puts into vars
// $display_user_name = cp_get_user_name();
// global $cp_options, $wpdb; 
get_header(); ?>


<div class="content wrapper-content">
	<div class="content-left">
        <div class="content-botbg">
				<div class="dashboard-main">
					<div class="row profile">
				
				<div class="col-md-6">				

				    <section id="about" class="home-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					
						<div class="section-heading text-center">
						<div class="wow bounceInDown" data-wow-delay="0.2s">
							<h2>My name is Ta Van Dung</h2>
						</div>
						<p class="wow bounceInUp" data-wow-delay="0.3s">I'm 23 years old from a Bac Giang, Viet Nam</p>
						</div>
					
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri() ?>/images/dung.jpg" class="img-responsive img-rounded" width="600" height="300" alt="<?php esc_attr_e('Demo Slide', 'vantage') ?>" />
				</div>		
				<div class="col-md-6">
					<h2><strong>Profile</strong></h2>
					<p>
					Full Name: Ta Van Dung
					</p>
					<p>
					Job: Mobile Developer
					</p>
					<blockquote>
					Pri pertinacia elaboraret te, an eirmod delicatissimi nec. Eu liber quodsi maiorum mei. 
					Civibus perfecto rationibus id his, est noster nostrud aliquando at.
					</blockquote>
				</div>
			</div>		
		</div>
	</section>
					
					
					
		

			</div><!--/profile-->		
				</div><!-- /shadowblock_out -->
		</div><!-- /content-botbg -->
		<?php //get_sidebar( 'user' ); ?>
	</div><!-- /content-left -->
	<div class="clr"></div>
</div><!-- /content -->