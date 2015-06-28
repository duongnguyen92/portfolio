<?php
// Template Name: Ban Hang
get_header();   
?>

<?php
$args = array(
	'post_type' => 'banhang',
	'post_status' => 'publish',
	'posts_per_page'   => 10,
	'orderby'          => 'ID',
	'order'            => 'DESC',
);
$posts = get_posts( $args );
?>
<?php 
	$today = getdate();
?>
	<div class="banhang-page">
		
		<p style="font-size: 23px; color: #006838; padding-top: 10px; font-weight: normal; font-family: Cambria;">Bán hàng</p>
	  
		<form action="" method="post">
			<table class="table table-condensed table-striped">
				<tr>
					<td>Ngày bán hàng: </td>
					<td><input type="text" class="text required" name="ngayban" id="ngayban" value="<?php echo date('d-m-Y'); ?>" /></td>  	
					<td><span id="ngayban_error" class="text" value="" ></span></td>
				</tr>
				<tr>
					<td>Tên khách hàng: </td>
					<td><input type="text"  class="text required" name="ten_kh" id="ten_kh" value="" /></td>
					<td><input type="text"  class="text required" name="ma_kh" id="ma_kh" placeholder="Mã khách hàng" value="" /></td>
					<td><span id="ten_kh_error" class="text" value="" ></span></td>
				</tr>
				<tr>
					<td>Địa chỉ khách hàng: <span style="color: red">* </span></td>
					<td><input type="text" class="text required" name="diachi" id="diachi" value="" /></td>
					<td><span class="text"  id="diachi_error" value="" ></span></td>
				</tr>
				<tr>
					<td>Tên sản phẩm: <span style="color: red">* </span></td>
					<td><input type="text" class="text required" name="ten_sp" id="ten_sp" value="" /></td>
					<td><input type="text"  class="text required" name="ma_sp" id="ma_sp" placeholder="Mã sản phẩm" value="" /></td>
					<td><span class="text"  id="ten_sp_error" value="" ></span></td>
				</tr>
				<tr>
					<td>Số lượng: <span style="color: red">* </span></td>
					<td><input type="text" class="text required" name="soluong" id="soluong" value="" /></td>
					<td><span class="text"  id="soluong_error" value="" ></span></td>
				</tr>
				<tr>
					<td>Khuyến mại: <span style="color: red">* </span></td>
					<td><input type="text" class="text required" name="khuyenmai" id="khuyenmai" value="" /></td>
					<td><span class="text" id="khuyenmai_error" value="" ></span></td>
				</tr>
				<tr>
					<td>Đơn giá: <span style="color: red">* </span></td>
					<td><input type="text" class="text required" name="dongia" id="dongia" value="" /></td>
					<td><span class="text" id="dongia_error" value="" ></span></td>
				</tr>
			</table>
		
			<a id="banhang-button" href="javascript:void(0)">
				<span class="add-banhang" >Thêm</span>
			</a>
			<div class="table-banhang"> </div>
			
			
		</form>
		
	</div>


<script type="text/javascript">
jQuery(function($){
	
	$('#ten_kh').autocomplete({
	source: function( request, response ) {
		var ten_kh = $('#ten_kh').val();
		$.ajax({
			url: "<?php bloginfo('url'); ?>/wp-admin/admin-ajax.php",
			dataType: "json",
			method: 'post',
			data: {
				action: 'kh_complete',
				name_startsWith: request.term,
				type: 'country_table',
				row_num : 1,
				ten_kh : ten_kh
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						 
						label: code[0],
						value: code[0],
						data : item
					}
				}));
			}
		});
	},
	autoFocus: true,	      	
	minLength: 0,	
	select: function( event, ui ) {
		var names = ui.item.data.split("|");						
		$('#ma_kh').val(names[1]);
	}
});

	$('#ten_sp').autocomplete({
	source: function( request, response ) {
		var ten_sp = $('#ten_sp').val();
		$.ajax({
			url: "<?php bloginfo('url'); ?>/wp-admin/admin-ajax.php",
			dataType: "json",
			method: 'post',
			data: {
				action: 'sp_complete',
				name_startsWith: request.term,
				type: 'country_table',
				row_num : 1,
				ten_sp : ten_sp
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						 
						label: code[0],
						value: code[0],
						data : item
					}
				}));
			}
		});
	},
	autoFocus: true,	      	
	minLength: 0,	
	select: function( event, ui ) {
		var names = ui.item.data.split("|");						
		$('#ma_sp').val(names[1]);
	}
});
	
	$('#banhang-button').click(function(){ 
		var url = '<?php echo get_site_url() . "/wp-admin/admin-ajax.php"; ?>'	;
		var ten_kh = $('#ten_kh').val();
		var ten_sp = $('#ten_sp').val();
		var status = 'publish';
		var ma_kh = $('#ma_kh').val();
		var diachi = $('#diachi').val();
		var ngayban = $('#ngayban').val();
		var khuyenmai = $('#khuyenmai').val();
		var dongia = $('#dongia').val();
		var soluong = $('#soluong').val();
		var error = false;
		if(soluong == '' || !(soluong)){
			$('#soluong_error').html('Mời bạn nhập số lượng sản phẩm');
			$('#soluong_error').fadeIn();
			error = true;
		}else{
			$('#ten_kh_error').fadeOut();
		}
		if(ten_kh == '' || !(ten_kh)){
			$('#ten_kh_error').html('Mời bạn nhập tên khách hàng');
			$('#ten_kh_error').fadeIn();
			error = true;
		}else{
			$('#ten_kh_error').fadeOut();
		}
		if(ten_sp == '' || !(ten_sp)){
			$('#ten_sp_error').html('Mời bạn nhập tên sản phẩm');
			$('#ten_sp_error').fadeIn();
			error = true;
		}else{
			$('#ten_sp_error').fadeOut();
		}
		if(diachi == '' || !(diachi)){
			$('#diachi_error').html('Mời bạn nhập địa chỉ khách hàng');
			$('#diachi_error').fadeIn();
			error = true;
		}else{
			$('#ten_sp_error').fadeOut();
		}
		if(ngayban == '' || !(ngayban)){
			$('#ngayban_error').html('Mời bạn nhập ngày bán');
			$('#ngayban_error').fadeIn();
			error = true;
		}else{
			$('#ngayban_error').fadeOut();
		}
		if(khuyenmai == '' || !(khuyenmai)){
			$('#khuyenmai_error').html('Mời bạn nhập khuyến mãi');
			$('#khuyenmai_error').fadeIn();
			error = true;
		}else{
			$('#khuyenmai_error').fadeOut();
		}
		if(dongia == '' || !(dongia)){
			$('#dongia_error').html('Mời bạn nhập đơn giá');
			$('#dongia_error').fadeIn();
			error = true;
		}else{
			$('#dongia_error').fadeOut();
		}
		var post_type = 'banhang';
		if(error == false){
			$.post(
			url, 
			{
				  'action': 'add_banhang',
				  'post_status': status,
				  'ngayban': ngayban,
				  'khuyenmai': khuyenmai, 
				  'diachi': diachi, 
				  'dongia': dongia,
				  'ten_sp': ten_sp,
				  'ten_kh': ten_kh,
				  'soluong': soluong,
			}, 
			function(response){
				$('.table-banhang').html(response); 
				$('#ten_sp').val('');
				$('#ten_kh').val('');
				$('#khuyenmai').val('');
				$('#diachi').val('');
				$('#dongia').val('');
				$('#ngayban').val('');
				$('#soluong').val('');
			}
		);
		}
		
	});
});
</script>
<?php get_footer(); ?>