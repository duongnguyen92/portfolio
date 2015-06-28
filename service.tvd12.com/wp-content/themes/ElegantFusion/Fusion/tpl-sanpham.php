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
		<table class="table table-condensed table-striped">
			<tr>
				<td>Mã sản phẩm: </td>
				<td><input id="ma_sp" class="text required" name="ma_sp" value="" /></td>
				<td><span id="ma_sp_error" class="text required" name="ma_sp" value="" ></span></td>
			</tr>
			<tr>
				<td>Tên sản phẩm: <span style="color: red">* </span></td>
				<td><input type="text" class="text required" name="post_title" id="post_title" value="" /></td>
				<td><span class="text required" name="post_title" id="post_title_error" value="" ></span></td>
			</tr>
		</table>
	
		<a href="javascript:void(0)" id="accept-wanted">
			<span class="wanted-ads-link">Thêm</span>
		</a>
		<div class="table-sanpham"> </div>
	</form>
</div>


<script type="text/javascript">
jQuery(function($){
	$('#accept-wanted').click(function(){
		var url = '<?php echo get_site_url() . "/wp-admin/admin-ajax.php"; ?>'; 
		var post_title = $('#post_title').val();
		var post_status = 'publish';
		var post_type = 'sanpham';
		var ma_sp = $('#ma_sp').val();
		var error = false;
		if(!(post_title) || post_title == ''){
			$('#post_title_error').html('Mời bạn nhập tên sản phẩm!');
			$('#post_title_error').fadeIn();
			error = true;
		}else{
			$('#post_title_error').fadeOut();
		}
		if(error == false){
			$.post(
			url, 
			{
				  'action': 'add_foobar',
				  'post_status': post_status,
				  'post_type': post_type,
				  'post_title': post_title,
				  'ma_sp': ma_sp
			}, 
			function(response){
				$('.table-sanpham').html(response); 
			}
		);
		}
	});
});
</script>