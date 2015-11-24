<?php
/**
 * The template for displaying the home page panel. Requires SiteOrigin page builder plugin.
 *
 * Template Name: Page Builder Home
 *
 * @package vantage
 * @since vantage 1.0
 * @see http://siteorigin.com/page-builder/
 * @license GPL 2.0
 */

get_header();
?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="news-homepage">
			<div class="news-left">
				<div class="head-news">
					<span><?php echo __(' Bài viết mới') ?></span> 
				</div>
				<div class="list-news">
					<?php
	// The Query
	$all_teacher = query_posts( array ( 
		'posts_per_page' => 20 ,
		'status'		 => 'publish'
	)) ;
	?>

    <?php
	// The Loop
	foreach($all_teacher as $post){
		 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		$short_desciption = splitByWords($post->post_content,20);
		$title = $post->post_title;
		$total = str_word_count($post->post_title);
		if($total > 6) {
			$title = splitByWords($post->post_title,6);
			$title = $title[0] . "....";
		}
		?>
		<div class="post-each">
			<a href="<?php the_permalink(); ?>">
			<div class="post-image"><img src="<?php  echo $image[0]; ?>"  alt="<?php the_title(); ?>" /></div>
			<h2 class="post-name"><a class="title" href="<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php the_title(); ?>"><?php echo $title; ?></a></h2></a>
			<div class="readmore-bt">Đọc thêm</div> 
		</div>
		<?php
		}
		?>
				</div>
			</div>
			<div class="video-right">
				<div class="video"><iframe width="412" height="235" src="https://www.youtube.com/embed/LCqwb33nrbs" frameborder="0" allowfullscreen></iframe></div>
				<div class="video"><iframe width="412" height="235" src="https://www.youtube.com/embed/kpFryXQbVEA" frameborder="0" allowfullscreen></iframe></div>
			</div>
		</div>
	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>

<script>
jQuery(document).ready(function(){
    jQuery('[data-toggle="tooltip"]').tooltip();   
});
</script>