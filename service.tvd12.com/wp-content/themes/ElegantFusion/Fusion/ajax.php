<?php 
if(isset($_POST['action'])){
	echo "333";
	$args = array(
	'post_type' => 'sanpham',
	'post_status' => 'publish',
	'posts_per_page'   => 5,
	'orderby'          => 'ID',
	'order'            => 'DESC',
);
$posts = get_posts( $args );

if ($posts) {
	foreach ( $posts as $post ) { ?>
			<?php $postID = $post->ID; ?>
			<?php echo $post->post_title; ?>
		<?php
	  }
	}
}
?>
