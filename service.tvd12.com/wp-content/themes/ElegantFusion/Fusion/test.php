<?php
// Template Name: Ban Hang
get_header();   
?>

<style>
.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list{float:left;list-style:none;margin:0;padding:0;width:190px;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}
#search-box{padding: 10px;border: #F0F0F0 1px solid;}
</style>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery("#search-box").keyup(function(){
		var url = '<?php echo get_site_url() . "/wp-admin/admin-ajax.php"; ?>'	;
		jQuery.post(
			url, 
			{
				'action': 'add_country',
				'keyword': jQuery("#search-box").val(),
			}, 
			function(data){
				jQuery("#suggesstion-box").show();
				jQuery("#suggesstion-box").html(data);
				jQuery("#search-box").css("background","#FFF");
			}
		);
	});
});

function selectCountry(val) {
jQuery("#search-box").val(val);
jQuery("#suggesstion-box").hide();
}
</script>

<div class="frmSearch">
<input type="text" id="search-box" placeholder="Country Name" />
<div id="suggesstion-box"></div>
</div>
