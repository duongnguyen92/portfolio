<?php if ( ! isset( $_SESSION ) ) session_start();
/*
Template Name: Contact Page
*/
?>
<?php
	$et_ptemplate_settings = array();
	$et_ptemplate_settings = maybe_unserialize( get_post_meta(get_the_ID(),'et_ptemplate_settings',true) );

	$fullwidth = isset( $et_ptemplate_settings['et_fullwidthpage'] ) ? (bool) $et_ptemplate_settings['et_fullwidthpage'] : false;

	$et_regenerate_numbers = isset( $et_ptemplate_settings['et_regenerate_numbers'] ) ? (bool) $et_ptemplate_settings['et_regenerate_numbers'] : false;

?>
<?php get_header(); ?>


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

	<div class="khachhang-page">

		<p style="font-size: 23px; color: #006838; padding-top: 10px; font-weight: normal; font-family: Cambria;">Bán hàng</p>
	  
		<form action="" method="post">
			<table class="table table-condensed table-striped">
				<tr>
					<td>Ngày bán hàng: </td>
					<td><input type="text" class="text required" name="ngayban" id="ngayban" value="" /></td>
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
					<td><span class="text"  id="ten_sp_error" value="" ></span></td>
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
		<p class="append-here"></p>
			<a id="banhang-button" href="javascript:void(0)">
				<span class="add-banhang" >Thêm</span>
			</a>
			<div class="table-banhang"> </div>
			
			
		</form>
		<div class="ui-widget">
		  <label for="tags">Tags: </label>
		  <input id="tags">
		</div>
	</div>
<script>
  jQuery(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    jQuery( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>

<?php get_footer(); ?>