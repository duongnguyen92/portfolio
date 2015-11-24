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
					<img src="<?php echo get_template_directory_uri() ?>/images/profile.jpg" class="img-responsive img-rounded" width="600" height="300" alt="<?php esc_attr_e('Demo Slide', 'vantage') ?>" />
				</div>		
				<div class="col-md-6">
					<h2><strong>Profile</strong></h2>
					<blockquote>Full Name: Tạ Văn Dũng <br/>
					Birth of Date: 30/05/1992<br/>
					Country: Mai Trung - Hiệp Hoà - Bắc Giang<br/>
					Phone Number: 01669020104<br/>
					Email: itprono3@gmail.com<br/>
					Facebook: https://www.facebook.com/dung.tavan<br/>
					Favorite Color: Blue and Yellow<br/>
					Zodiac: Gemini <br/>
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
</div>
<?php get_footer(); ?>