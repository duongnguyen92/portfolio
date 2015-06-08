<?php
/*
 * Template Name: Danh sach khach hang 
 *
 * This template must be assigned to a page
 * in order for it to work correctly
 *
*/
// $current_user = wp_get_current_user(); // grabs the user info and puts into vars
// $display_user_name = cp_get_user_name();
// global $cp_options, $wpdb; 
get_header(); ?>


<div class="content wrapper-content">
	<div class="content-left">
        <div class="content-botbg">
				<div class="dashboard-main">
					<div class="wrapper-dskh">
    <div class="billing">
        <div class="info-company">
            <div>Đơn vị: Công ty TNHH Đầu tư và Thương mại Techpharm Việt Nam</div>
            <div>Địa chỉ: Số 6, ngõ 109 Hoàng Ngân, Nhân Chính Thanh Xuân Hà Nội <span>ĐT: 043.5551685</span></div>
        </div>

        <div class="release-date">
            <div>Mẫu số: 01-GTGT/2LL</div>
            <div>(Ban hành theo QĐ số 48/2006/QĐ-BTC <br/><span>Ngày 14/09/2006 của Bộ trưởng BTC)</span></div>
        </div>
        <br />
        <div class="additional">
            <span>Hoạch toán theo chứng từ số: </span><br />
            <span>BH-12391</span>
        </div>
        <br />
        <form class="hoadon" method="post" enctype="multipart/form-data">
            <div class="title-hd">
                <h2>Danh sách khách hàng</h2>
            </div>
            <div>
            <table class="table table-condensed table-striped">
    <thead>
        <tr>
            <th class="col-sm-1">Number</th>
            <th class="col-sm-2">Standard</th>
            <th class="col-sm-2">Category</th>
            <th class="col-sm-2">Labs</th>
            <th class="col-sm-3">Description</th>
            <th class="col-sm-2">Min. Sample Size</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>e</td>
                <td>f</td>
            </tr>
    </tbody>
</table>
                <p id="append-row"></p>
            </div>
        </form>
        <div class="total-price">
            <p>Cộng tiền hàng: </p>
            <p>Tiền thuế GTGT: </p>
            <p>Tổng cộng: </p>
        </div>

        <div class="price-write">
            <p>Số tiền viết bằng chữ:  </p>
        </div>

        <div class="seller-sign">
            <p><span>Người bán hàng</span></p>
        </div>
        <div class="buyer-sign">
            <p><span>Người mua hàng</span></p>
        </div>
        <div class="date-create">
            <p><span>Ngày tháng năm</span><br/><span>Thủ trưởng đơn vị</span></p>
        </div>
        <p><button id="btnAddAction" name="submit" onClick="saveData('add')">Save</button></p>
    </div>
</div><!-- /shadowblock_out -->
		</div><!-- /content-botbg -->
		<?php //get_sidebar( 'user' ); ?>
	</div><!-- /content-left -->
	<div class="clr"></div>
</div><!-- /content -->