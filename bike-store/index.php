<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include "inc/koneksi.php";

if(@$_SESSION['customer']){
?>

<!DOCTYPE html>
<html>
<head>
<title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<!--js-->
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->


</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-bg1">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="index.php"><img src="images/logo23.png" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><a href="index.php">BERANDA</a>
						  </li>               
						 <li class="dropdown1"><a href="#">TENTANG KAMI</a>
						  </li>
						  <li class="dropdown1"><a href="#">BANTUAN</a>
						  </li>
						  <a class="shop" href="cart.html"><img src="images/cart.png" alt=""/></a>
						  <li class="dropdown1"><a href="inc/logout.php">Logout</a>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div>	 
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
							    <li><h1>MELAYANI SEPENUH HATI</h1></li>
								<li><h1>HARGA 5500/LITER</h1></li>	
								<li><h1>MUDAH, AMAN, DAN TERPERCAYA</h1></li>	
						  </ul>
						  <p>Pesan <span>Solar</span> tanpa <span>harus</span> antri </span></p>
						  <a class="morebtn" href="single.html">PESAN SOLAR</a>
					  </div>
				  </div>
	 </div>
	 <div class="dwn">
		<a class="scroll" href="#cate"><img src="images/scroll.png" alt=""/></a>
	 </div>				 
</div>
<!--/banner-->
<div id="cate" class="categories">
	 <div class="container">
		 <h3>PEMBELIAN SOLAR</h3>
		 <div class="categorie-grids">
			 <a href="bicycles.html"><div class="col-md-12 cate-grid grid1">
				 <h4>SEGERA PESAN</h4>
				 <p>Hanya dengan Rp 5500/Liter</p>
				 <a class="store" href="single.html">Pesan Solar</a>
			 </div></a>
			<!-- <a href="bicycles.html"><div class="col-md-4 cate-grid grid2">
				 <h4>PREMIMUM SERIES</h4>
				 <p>Exclusive Bike Components</p>
				 <a class="store" href="bicycles.html">GO TO STORE</a>
			 </div></a>
			 <a href="bicycles.html"><div class="col-md-4 cate-grid grid3">
				 <h4>CITY BIKES</h4>
				 <p>Street Playground</p>
				 <a class="store" href="bicycles.html">GO TO STORE</a>
			 </div></a>-->
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--bikes-->
<div class="bikes">	
		 <h3>LAYANAN KAMI</h3>
	<div class="bikes-grids">	
		<div class="categorie-grids">
			 <div class="col-md-8 services-grid grid8">
				 <h4>Pesan Sendiri</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, seddo eiusmod tempor incid.idunt ut labore et dolore magna aliqua.</p>
			 </div>
			<div class="col-md-8 services-grid grid6">
				 <h4>Pelayanan Cepat</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, seddo eiusmod tempor incid.idunt ut labore et dolore magna aliqua.</p>
			 </div>
			 <div class="col-md-8 services-grid grid7">
				 <h4>Aman & Terpercaya</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, seddo eiusmod tempor incid.idunt ut labore et dolore magna aliqua.</p>
			 </div>
			 <div class="col-md-8 services-grid grid5">
				 <h4>Efisiensi Waktu</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, seddo eiusmod tempor incid.idunt ut labore et dolore magna aliqua.</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	</div>
</div>
<!--Fitur-->
<div class="categories">
	<h3>TENTANG KAMI</h3>
	<div class="bikes-grids">	
		<div class="about-grid">
				<p>F-Ship</p>	
				<p>Kami meberikan pelayanan terbaik</p>
				<p>F-Ship merupakan website untuk memesan bahan bakar solar yang ditujukan untuk nelayan.</p>\
				<p>F-Ship membantu nelayan dalam mengatasi masalah sulit dan mahalnya biaya dalam pembelian bahan bakar</p>
		</div>
	</div>
	
</div>
<!--endFitur-->

<!-- team -->
<div id="cate" class="bikes">
	 <div class="container">
		 <h3>TIM KAMI</h3>
		 <div class="categorie-grids">
			 <div class="col-md-4 team-grid grid2">
				 <h4>Puji Santoso</h4>
				 <p>H</p>
				 <a class="store" href="bicycles.html">Pesan Solar</a>
			 </div>
			<a href="bicycles.html"><div class="col-md-4 team-grid grid3">
				 <h4>Putri Yula</h4>
				 <p>Exclusive Bike Components</p>
				 <a class="store" href="bicycles.html">GO TO STORE</a>
			 </div></a>
			 <a href="bicycles.html"><div class="col-md-4 team-grid grid4">
				 <h4>Rizal Kholif</h4>
				 <p>Street Playground</p>
				 <a class="store" href="bicycles.html">GO TO STORE</a>
			 </div></a>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- //team -->

<!---->
<div class="contact">
	<div class="container">
		<h3>HUBUNGI KAMI</h3>
		<p>hubungi kami jika ada masalah saat melakukan pemesanan.</p>
		<form action='formcontact.php' action='post'>
			 <input type="text" name ="nama" placeholder="NAMA" required="">
			 <input type="text" name="namabl" placeholder="NAMA BELAKANG" required="">			 
			 <input class="user" type="text" name="email" placeholder="USER@DOMAIN.COM" required=""><br>
			 <textarea placeholder="PESAN" name="pesan"></textarea>
			 <input type="submit" value="KIRIM">
		</form>
	</div>
</div>
<!---->
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="index.html"><img src="images/logo23.png" alt=""/></a>
		</div>
		<div class="ftr-menu">
			 <ul>
				 <li><a href="bicycles.html">BICYCLES</a></li>
				 <li><a href="parts.html">PARTS</a></li>
				 <li><a href="accessories.html">ACCESSORIES</a></li>
				 <li><a href="404.html">EXTRAS</a></li>
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>
<?php
} else {
	header("location: login.php");
}
?>

