<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">
	<link rel="icon" href="ico/logokotak.png">

	<title>Kurir Suroboyo</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Overwrite bootstrap style -->
	<link href="css/bootsnav.css" rel="stylesheet">
	<link href="css/overwrite.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='fonts/opensans/stylesheet.css' rel='stylesheet' type='text/css'>

	<!-- Icons -->
	<link href="fonts/FontAwesome/font-awesome.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Skins style -->
	<link id="skin" href="skins/default.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="js/ie-emulation-modes-warning.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Strat Top Menu -->
	<div class="top-menu">
		<div class="container">
			<ul class="menu-link">
				<li><a href="/signup">Daftar gratis</a></li>
				<li><a href="/login">Masuk</a></li>
			</ul>
			<ul class="menu-icon">
				<li><a href="https://www.facebook.com/kurirsuroboyo/?ref=page_internal"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/kurir_suroboyo/"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!-- End Top Menu -->

	<!-- Start Navigation -->
	<nav class="navbar navbar-default navbar-sticky bootsnav">
		<!-- Start Top Search -->
		<!-- <div class="top-search">
			<div class="container">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-search"></i></span>
					<input type="text" class="form-control" placeholder="Search">
					<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				</div>
			</div>
		</div> -->
		<!-- End Top Search -->
		<div class="container">
			<!-- Start Atribute Navigation -->
			<!-- <div class="attr-nav">
				<ul>
					<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
				</ul>
			</div> -->
			<!-- End Atribute Navigation -->
			<!-- Start Header Navigation -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="#brand"><img src="images/brand/namakotak.png" class="logo" alt=""></a>
			</div>
			<!-- End Header Navigation -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-menu">
				<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
					<li><a href="/">Beranda</a></li>
					<li><a href="/aboutus">Tentang Kami</a></li>
					<li><a href="/service">Layanan</a></li>
					<li><a href="/gallery">Galeri</a></li>
					<li class="active"><a href="/contact">Kontak</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<!-- End Navigation -->

	<div class="clearfix"></div>

	<!-- Start page title -->
	<div class="section page-title">
		<div class="parallax" data-background="images/bg/page-header.jpg" data-jarallax='{"speed": 0.7}'></div>
		<div class="container content-parallax">
			<h3 class="title">Hubungi <span>Kami</span></h3>
		</div>
		<div class="triangle" data-height="85" data-color-bottom="#ffffff" data-color-top="transparent"></div>
	</div>
	<!-- End page title -->

	<div class="clearfix"></div>

	<!-- Start contain wrapp -->
	<div class="section padding-bot50">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<!-- Start Form -->
					<form method="post" action="/savekritiksaran" enctype="multipart/form-data" >
						<div class="clearfix"></div>
						<div id="success"></div>
                        <?php csrf_field(); ?>
                        <?php if (session()->getFlashData('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashData('success'); ?>
                            </div>
                        <?php elseif (session()->getFlashData('error')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashData('error'); ?>
                            </div>
                        <?php endif; ?>
						<div class="row wrap-form">
							<div class="form-group col-md-6 col-sm-6">
								<h6>Nama Lengkap</h6>
								<input type="text" name="name" id="name" class="form-control input-lg required" placeholder="Masukkan nama lengkapmu...">
								<span data-for="name" class="error"></span>
							</div>
							<div class="form-group col-md-6 col-sm-6">
								<h6>Nomor Telepon</h6>
								<input type="tel" name="notelp" id="notelp" class="form-control input-lg required" placeholder="Masukkan nomor teleponmu...">
								<span data-for="notelp" class="error"></span>
							</div>
							<div class="form-group col-md-12 col-sm-12">
								<h6>Kritik dan Saran</h6>
								<textarea name="message" id="message" class="form-control input-lg required" placeholder="Tuliskan sesuatu untuk kami..." rows="9"></textarea>
								<span data-for="message" class="error"></span>
							</div>
							<div class="form-group col-md-12 col-sm-12">
								<input type="submit" value="Kirim" id="submit" class="btn btn-primary btn-lg" />
								<div class="status-progress"></div>
							</div>
						</div>
					</form>
					<!-- End Form -->
				</div>
				<div class="col-md-4 col-sm-5">
					<div class="contact-detail">
						<div class="contact-sparator"></div>
						<ul class="list-unstyled">
							<li>
								<i class="fa fa-home fa-2x fa-primary"></i>
								<h6>Lokasi kami</h6>
								<p>
									Jl. Raya Pd. Rosan No.52, Babatan, Kecamatan Wiyung, Kota Surabaya<br />
									Jawa Timur - Indonesia
								</p>
							</li>
							<li>
								<i class="fa fa-phone fa-2x fa-primary"></i>
								<h6>Telepon</h6>
								<p>
									0821-4060-2855
								</p>
							</li>
							<li>
								<i class="fa fa-envelope fa-2x fa-primary"></i>
								<h6>Alamat Email </h6>
								<p>
									kurirsuroboyo@gmail.com
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="triangle margintop10" data-height="85" data-color-bottom="#ffffff" data-color-top="transparent"></div>
	</div>
	<!-- End contain wrapp -->

	<div class="clearfix"></div>

	<!-- Start Section -->
	<div class="section paddingtop-clear bg-primary">
		<div class="triangle marginbot60" data-height="85" data-color-bottom="transparent" data-color-top="#f0f2f5"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h5>Kami adalah solusi untuk pengiriman bisnis anda </h5>
					<p>Hubungi whatsapp kami untuk respon yang lebih cepat</p>
					<a class="btn btn-icon" href="https://api.whatsapp.com/send/?phone=6282140602855&text&app_absent=0">Whatsapp <i class="fa fa-send-o"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<div class="clearfix"></div>

	<!-- Start footer -->
	<footer>
		<!-- Start main footer -->
		<div class="main-footer padding-bot30">
			<div class="container">
				<div class="row">
					<div class="col-md-3 widget-footer">
						<h5 class="title">Jam Buka</h5>
						<p>Senin - Sabtu (08.00 - 17.00)</p>
						<p>Minggu (09.00 - 17.00)</p>
						<div class="footer-network">
							<a href="https://www.facebook.com/kurirsuroboyo/?ref=page_internal"><i class="fa fa-facebook icon-circle"></i></a>
							<a href="https://www.instagram.com/kurir_suroboyo/"><i class="fa fa-instagram icon-circle"></i></a>
						</div>
					</div>
					<div class="col-md-3 widget-footer">
						<div class="row">
							<div class="col-md-5 col-sm-6 col-xs-6">
								<!-- Start Link -->
								<ul class="footer-link">
									<li><a href="/aboutus">Tentang Kami</a></li>
									<li><a href="/service">Layanan</a></li>
									<li><a href="/gallery">Galeri</a></li>
									<li><a href="/contact">Kontak</a></li>
								</ul>
								<!-- End Link -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End main footer -->

		<!-- Start sub footer -->
		<div class="subfooter">
			<p>2021 &copy; Copyright Semut Pekerja Web. All rights Reserved.</p>
		</div>
		<!-- End sub footer -->
	</footer>
	<!-- End footer -->

	<!-- Start to top -->
	<a href="#" class="toTop">
		<i class="fa fa-chevron-up"></i>
	</a>
	<!-- End to top -->

	<!-- START JAVASCRIPT -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

	<!-- Bootsnavs -->
	<script src="js/bootsnav/bootsnav.js"></script>

	<!-- Columns -->
	<script src="js/column/bootstrap-grid-columns.js"></script>

	<!-- Custom form -->
	<script src="js/form/jcf.js"></script>
	<script src="js/form/jcf.scrollable.js"></script>
	<script src="js/form/jcf.select.js"></script>
	<script>
		jcf.replaceAll();
	</script>

	<!-- ticker -->
	<script src="js/ticker/ticker.js"></script>

	<!-- Parallax -->
	<script src="js/parallax/jarallax.js"></script>
	<script src="js/parallax/setting.js"></script>

	<!-- Start Form Plugin -->
	<script src="js/validation/jquery.validate.min.js"></script>
	<script src="js/validation/setting.js"></script>

	<!-- Twitter -->
	<!--[if lte IE 9]>
    	<script src="js/tweecool/jquery.xdomainrequest.min.js"></script>      
	<![endif]-->
	<script src="js/tweecool/tweecool.js"></script>
	<script src="js/tweecool/setting.js"></script>

	<!-- My Script -->
	<script type="text/javascript" src="js/custom.js"></script>

	<!-- Maps -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoRXkZUQLwRTaEF2MymFO5CzuCFBYejMQ"></script>

	<!-- END JAVASCRIPT -->

</body>

</html>