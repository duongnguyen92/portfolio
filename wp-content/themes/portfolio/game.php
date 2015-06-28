<?php
/*
 * Template Name: Game
 *
 * This template must be assigned to a page
 * in order for it to work correctly
 *
*/
// $current_user = wp_get_current_user(); // grabs the user info and puts into vars
// $display_user_name = cp_get_user_name();
// global $cp_options, $wpdb; 
get_header(); ?>


<div class="game-content wrapper-content">
	<div class="content-left">
        <div class="content-botbg">
				<div class="dashboard-main">
					<div class="row profile">
				
				<div class="col-md-6">				

	<section id="about" class="home-section">
		<div class="container">
			<div class="container-fluid">
			<h1>Game created by me </h1>
				  <div class="row-game">
				  <div class="col-xs-6 col-sm-3 game-grid" style="background-color:lightcyan;">
						<div class="logo"><img src="<?php echo get_bloginfo('template_directory'). "/images/cut-gift.png" ?>" alt="Cut the gift" href="#" height="180" width="180" /></div>
						<p>Cut the gift</p>
						<a href="https://play.google.com/store/apps/details?id=com.tvd.cutthegift"><img src="<?php echo get_bloginfo('template_directory'). "/images/logo-gp.png" ?>" alt="Super memory"  height="30" width="30" /></a>
						<a href="https://itunes.apple.com/app/id997741554" ><img src="<?php echo get_bloginfo('template_directory'). "/images/logo-app.png" ?>" alt="Super memory" height="30" width="30" /></a>
					</div>
					<div class="clearfix visible-xs game-grid"></div>
					<div class="col-xs-6 col-sm-3 game-grid" style="background-color:lavender;">
						<div class="logo"><img src="<?php echo get_bloginfo('template_directory'). "/images/smart-cuts.png" ?>" alt="Smart Cut" href="#" height="180" width="180" /></div>
							<p>Smart Cut</p>
							<a href="https://play.google.com/store/apps/details?id=com.tvd.unlimited"><img src="<?php echo get_bloginfo('template_directory'). "/images/logo-gp.png" ?>" alt="Super memory"  height="30" width="30" /></a>
							<a href="https://itunes.apple.com/app/id993479075"><img src="<?php echo get_bloginfo('template_directory'). "/images/logo-app.png" ?>" alt="Super memory"  height="30" width="30" /></a>
					</div>
					<div class="col-xs-6 col-sm-3 game-grid" style="background-color:lavenderblush;">
						<div class="logo"><img src="<?php echo get_bloginfo('template_directory'). "/images/spring-eggs.png" ?>" alt="Spring Eggs" href="#" height="180" width="180" />	</div>
						<p>Spring Eggs</p>
						<a href="https://play.google.com/store/apps/details?id=com.tvd.spingeggs"><img src="<?php echo get_bloginfo('template_directory'). "/images/logo-gp.png" ?>" alt="Super memory"  height="30" width="30" /></a>
						<a href="https://itunes.apple.com/app/id995706504" ><img src="<?php echo get_bloginfo('template_directory'). "/images/logo-app.png" ?>" alt="Super memory" height="30" width="30" /></a>
					</div>
					<div class="col-xs-6 col-sm-3 game-grid" style="background-color:lavender;">
						<div class="logo"><img src="<?php echo get_bloginfo('template_directory'). "/images/super-memory.png" ?>" alt="Super memory" href="#" height="180" width="180" /></div>
						<p>Super memory</p>
						<a href="https://play.google.com/store/apps/details?id=com.tvd.supernaturalmemory"><img src="<?php echo get_bloginfo('template_directory'). "/images/logo-gp.png" ?>" alt="Super memory" height="30" width="30" /></a>
						<a href="#"><img src="<?php echo get_bloginfo('template_directory'). "/images/logo-app.png" ?>" alt="Super memory" href="#" height="30" width="30" /></a>
					</div>
					
					<!-- Add clearfix for only the required viewport -->
					
				  </div>
				
				  <div class="also-game">
					  <h1>Also</h1>
					<p class="title">Game mobile Video Poker </p>
					<a class="link" href="https://www.play.google.com/store/apps/details?id=com.tdgc.dragonvideopoker">https://www.play.google.com/store/apps/details?id=com.tdgc.dragonvideopoker</a>
					<p class"title">Game mobile Onet Pikachu </p>
					<a class="link" href="https://www.play.google.com/store/apps/details?id=com.tdg.matchinganimal">https://www.play.google.com/store/apps/details?id=com.tdg.matchinganimal</a>
				
				  </div>
</div>
		</div> 

		<div class="container">
			<div class="row">
				
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