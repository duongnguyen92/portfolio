<?php
// Template Name: Customer
get_header();   
?>

<?php
$args = array(
	'post_type' => 'khachhang',
	'post_status' => 'publish',
	'posts_per_page'   => 10,
	'orderby'          => 'ID',
	'order'            => 'DESC',
);
$posts = get_posts( $args );
?>

	<div class="khachhang-page">

		<p style="font-size: 23px; color: #006838; padding-top: 10px; font-weight: normal; font-family: Cambria;">Thêm khách hàng</p>
	  
		<form action="" method="post">
			<table class="table table-condensed table-striped">
				<tr>
					<td>Mã khách hàng: </td>
					<td><input type="text" id="ma_kh" class="text required" name="ma_kh" value="" /></td>
					<td><span id="ma_kh_error" class="text" value="" ></span></td>
				</tr>
				<tr>
					<td>Tên khách hàng: <span style="color: red">* </span></td>
					<td><input type="text" class="text required" name="post_title" id="ten-kh" value="" /></td>
					<td><span class="text"  id="ten_kh_error" value="" ></span></td>
				</tr>
				<tr>
					<td>Địa chỉ: <span style="color: red">* </span></td>
					<td><input type="text" class="text required" name="post_title" id="diachi-kh" value="" /></td>
					<td><span class="text" id="diachi_kh_error" value="" ></span></td>
				</tr>
			</table>
		
			<a id="customer-button" href="javascript:void(0)">
				<span class="add-customer" >Thêm</span>
			</a>
			<div class="table-khachhang"> </div>
			
			
		</form>
		
	</div>


<script type="text/javascript">
jQuery(function($){
	$('#customer-button').click(function(){ 
		var url = '<?php echo get_site_url() . "/wp-admin/admin-ajax.php"; ?>'	;
		var ten_kh = $('#ten-kh').val();
		var diachi = $('#diachi-kh').val();
		var status = 'publish';
		var ma_kh = $('#ma_kh').val();
		var error = false;
		if(ten_kh == '' || !(ten_kh)){
			$('#ten_kh_error').html('Mời bạn nhập tên khách hàng');
			$('#ten_kh_error').fadeIn();
			error = true;
		}else{
			$('#ten_kh_error').fadeOut();
		}
		if(diachi == '' || !(diachi)){
			$('#diachi_kh_error').html('Mời bạn nhập địa chỉ khách hàng');
			$('#diachi_kh_error').fadeIn();
			error = true;
		}else{
			$('#diachi_kh_error').fadeOut();
		}
		var post_type = 'khachhang';
		if(error == false){
			$.post(
			url, 
			{
				  'action': 'add_customer',
				  'post_status': status,
				  'post_type': post_type,
				  'post_title': ten_kh, 
				  'diachi': diachi,
				  'ma_kh': ma_kh
			}, 
			function(response){
				$('.table-khachhang').html(response); 
			}
		);
		}
		
	});
});
</script>