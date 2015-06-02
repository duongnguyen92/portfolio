<?php
/**
 * The Header for our theme.
 *
 */
 global $cubby_options;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(is_home()) $wrap_class = "homepage"; else $wrap_class = "blog-list-page both-aside";?>
	<div class="<?php echo $wrap_class;?>">
		<!--Header-->
		<header>
			<div class="header-main">
				<div class="container">
					<div class="logo-box text-left">
                    <?php if ( cubby_options_array('logo')!="") { ?>
						<a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo cubby_options_array('logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
        <?php }?>
        				<div class="name-box">
							<a href="<?php echo esc_url(home_url('/')); ?>"><h1 class="site-name"><?php bloginfo('name'); ?></h1></a>
							<span class="site-tagline"><?php echo  get_bloginfo( 'description' );?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-header"><?php echo do_shortcode("[metaslider id=4]"); // replace 123 with your slideshow ID ?></div>
		</header>