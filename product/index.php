<?php
	include_once('db-connection.php');
	$database = new database();
	$conn= $database->_construct();

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>PT.Varian Sukses Mandiri | Distributor Makanan dan Minuman Terpercaya</title>
	<link rel="stylesheet" href="../design.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='robots' content='max-image-preview:large'/>
    <meta name="robots" content="index,follow"/>
	<meta name="Description" CONTENT="PT.Varian Sukses Mandiri | Distributor Makanan dan Minuman Terpercaya">
	
	<meta name="keywords" CONTENT="Varian Sukses Mandiri, distributor, food & beverages, company, product, order">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel = "icon"  href = "../gambar/logo.jpg" type = "image/x-icon">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet"  href="../tools/css/lightslider.css"/>
	
	
	
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light rounded fixed-top shadow-lg bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="../gambar/logo.png" width="60" height="60" class="d-inline-block">PT.Varian Sukses Mandiri</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ResponsiveNavbar" aria-controls="ResponsiveNavbar" 
				aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="ResponsiveNavbar">
				  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="..\">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="..\company">Company</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#">Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="..\contact-us\">Contact Us</a>
					</li>
				  </ul>
				</div>
			</div>
		</nav>
		
	<br/><br/>
		<div id="heading2" 
		data-aos="fade-right" 
		data-aos-offset="200"
		data-aos-delay="50"
		data-aos-duration="1000"
		data-aos-easing="ease-in-out"
		data-aos-mirror="true"
		data-aos-once="true"
		data-aos-anchor-placement="top-center"		
		class="container-fluid bg" style="padding-top:70px;padding-bottom:100px">
		</br></br>
			  <div class="row justify-content-center">
				  <div id="slide" 
				  data-aos="zoom-in" 
				  data-aos-offset="200"
				  data-aos-delay="150"
				  data-aos-duration="1000"
				  data-aos-easing="ease-in-out"
				  data-aos-mirror="true"
				  data-aos-once="true"
				  class="col-md-10 rounded-3">
					<img src="../gambar/banner2.jpg" class="card-img w-100 center">
				  </div>
			  </div>
		</div>
	<div 
	data-aos="fade-right" 
	data-aos-offset="-300"
	data-aos-delay="0"
	data-aos-duration="1000"
	data-aos-easing="ease-in-out"
	data-aos-mirror="true"
	data-aos-once="true"
	data-aos-anchor-placement="top-center"
	id="heading1" class="container-fluid text-center">
		</br>
		<h2 style="color:black;">OUR PRODUCT</h2>
		</br>
	</div>
	
	<div id="heading2" 	
	class="container-fluid" style="padding-top:70px;padding-bottom:100px">
		<?php
		$x = 0;
		$pref2 = 5;
		$item_per_page = 25*($_GET['page']-1);
		$pref1 = 0 + $item_per_page;
		while ($x < 5){
			$result = $database->read($pref1,$pref2);
			$pref1 = $pref1 + $pref2;
			$x = $x + 1;
			echo "
			<div class='row' style='padding-bottom:50px;'>
				<div class='col-md-1'></div>";
		
			while($data = mysqli_fetch_array($result)){
				echo "
					<div class='col-md' data-aos='fade-up' >
						<img style='max-width:150px; max-height:150px;' src='../gambar/produk/mediapng/".$data['file_gambar']."'class='w-50 center rounded-4'>
						<h6 class='font-weight-light lh-base text-center'><b>
						  ".$data['NAMA_BARANG']."</b></h6>
					</div>
				";
			}
			echo "
				<div class='col-md-1'></div>
			</div>
			";
		}
		?>
		<div class="row">
			<div class="col-md d-flex justify-content-center">
			<nav>
			  <ul class="pagination pagination-lg">
				
				<li class="page-item <?php if($_GET['page']=='1'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=1">1</a></li>
				<li class="page-item <?php if($_GET['page']=='2'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=2">2</a></li>
				<li class="page-item <?php if($_GET['page']=='3'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=3">3</a></li>
				<li class="page-item <?php if($_GET['page']=='4'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=4">4</a></li>
				<li class="page-item <?php if($_GET['page']=='5'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=5">5</a></li>
				<li class="page-item <?php if($_GET['page']=='6'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=6">6</a></li>
				<li class="page-item <?php if($_GET['page']=='7'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=7">7</a></li>
				<li class="page-item <?php if($_GET['page']=='8'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=8">8</a></li>
				<li class="page-item <?php if($_GET['page']=='9'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=9">9</a></li>
				<li class="page-item <?php if($_GET['page']=='10'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=10">10</a></li>
				<li class="page-item <?php if($_GET['page']=='11'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=11">11</a></li>
				<li class="page-item <?php if($_GET['page']=='12'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=12">12</a></li>
				<li class="page-item <?php if($_GET['page']=='13'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=13">13</a></li>
				<li class="page-item <?php if($_GET['page']=='14'){echo 'active';} ?>"><a style="color:black;" class="page-link" href="?page=14">14</a></li>				
				
			  </ul>
			</nav>
			</div>
		</div>
	</div>
		
	
	<div id="heading3" 		
	class="container-fluid" style="padding-top:70px;padding-bottom:100px">
	
		<div class="row">
			<div class="col-md" style="margin-right:50px">
				<h3 class="font-weight-light" style=" padding-left:55px; padding-bottom:40px"><b>PT. VARIAN SUKSES MANDIRI</b></h3>
				<h5 class="font-weight-light lead" style="padding-left:50px; padding-bottom:50px"><b>
				We also have social media, for the latest price and more information you can contact us.
				<br><br>
				<a href="https://web.whatsapp.com" target="_blank"><img width=50 height=50 src="../gambar/wa.png"></a>
				<a href="https://instagram.com" target="_blank"><img width=40 height=40 src="../gambar/insta.png"></a>
				</b></h5>
			</div>
			<div class="col-md text-center" style="padding-bottom:30px">
				<h3 class="font-weight-light" style="padding-bottom:30px;"><b>OUR LOCATION</b></h3>
				<iframe width=300vw height=200vw src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9580274776945!2d106.78016817450032!3d-6.136341860158756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1dd3a829b585%3A0xe9072bd891504c4f!2sPT.VARIAN%20SUKSES%20MANDIRI%20(VSM)!5e0!3m2!1sid!2sid!4v1696505944491!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>			</div>
			<div class="col-md text-center" style="padding-bottom:30px">
				<h3 class="font-weight-light" style="padding-bottom:30px;"><b>CONTACT FOR ORDER</b></h3>
				  <h5 class="font-weight-light lead"><b>
				  <p><a href="https://web.whatsapp.com" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">FEEL FREE TO CONTACT US NOW</a></p>
				  </b></h5>
			</div>
		</div>
		
	</div>
	
	<div id="heading2" 		
	class="container-fluid" style="padding-top:10px;padding-bottom:100px">
	
		<div class="row">
			<div class="col-md text-center">
				<h6 class="font-weight-light" style="color:black;">Copyright &copy PT. Varian Sukses Mandiri 2023</h3>
			</div>
		</div>
		
	</div>
	
	

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="../tools/js/lightslider.js"></script>
	<script src="../vsm.js"></script>
	<script>
		$(document).ready(function() {
		$("#multi-slide").lightSlider({
			item:3,
			pager:false,
			autoWidth:false,
			enableTouch:true,
			enableDrag:false,
			controls:true,
			loop:true,
			slideMargin:0,
			keypress:true,
			verticalHeight:1000,
			auto:true,
		});
		
	});
	</script>
	
</body>
</html>