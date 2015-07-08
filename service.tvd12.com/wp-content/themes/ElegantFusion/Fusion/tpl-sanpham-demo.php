<?php
// Template Name: San pham
get_header();   
?>

<?php
$args = array(
	'post_type' => 'sanpham',
	'post_status' => 'publish',
	'posts_per_page'   => 5,
	'orderby'          => 'ID',
	'order'            => 'DESC',
);
$posts = get_posts( $args );
?>


<div class="place-wanted">

	<p style="font-size: 23px; color: #006838; padding-top: 10px; font-weight: normal; font-family: Cambria;">Thêm sản phẩm</p>

	<form action="" method="post">
		<table class="table table-condensed table-striped product-table">
			<tr>
				<td>Tên sản phẩm: <span style="color: red">* </span></td>
				<td><input type="text" class="text required" name="post_title" id="post_title"  /></td>
				<td><span class="text required" name="post_title" id="post_title_error"  ></span></td>
			</tr>
		</table>
	
		<a href="javascript:void(0)" id="accept-wanted">
			<span class="wanted-ads-link">Thêm</span>
		</a>
		<div class="table-sanpham"> </div>
		<div class="sanpham"> </div>
	</form>
</div>


<script type="text/javascript">
jQuery(function($){
	var url = '<?php echo get_site_url() . "/wp-admin/admin-ajax.php"; ?>';
	
	var post_status = 'publish';
	var post_type = 'sanpham';
		$.post(
		url, 
		{
			'action': 'auto_show',
		},
		function(response){
			$('.table-sanpham').html(response); 
		}
	);
		$('.wanted-ads-link').click(function(){
			var post_title = $('#post_title').val();
			$('.list-product').fadeOut();
			$.post(
			url, 
			{
				'action': 'add_product_demo',
				'post_title': post_title,
			},
			function(response){
				$('.sanpham').html(response); 
				$('#post_title').val('');
			}
			);
		});

});
</script>