<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HÓA ĐƠN BÁN HÀNG</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="customer-list" class="index">

    <!-- Navigation -->
		
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
                <h2>BẢNG TỔNG HỢP PHÁT SINH CÔNG NỢ THEO ĐỐI TƯỢNG</h2>
            </div>
            <div>
				<table class="table table-condensed table-striped customer-list-table">
		<thead>
			<tr>
				<th class="col-sm-1">STT</th>
				<th class="col-sm-2">Mã đối tượng</th>
				<th class="col-sm-2">Tên đối tượng</th>
				<th class="col-sm-2">Số dư đầu kỳ</th>
				<th class="col-sm-2">Số dư phát sinh</th>
				<th class="col-sm-2">Số dư cuối kỳ</th>
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
</div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; tvd12.com 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

 

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
