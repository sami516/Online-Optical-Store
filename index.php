<?php
include"admin/dbconfig.php";
if(isset($_SESSION['login']))
{
	
}
else
{
	header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sailor - Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

</head>

<body>



	<div id="wrapper">
		<!-- start header -->
		<header>
			

			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" width="199" height="52" /></a>
					</div>
					<?php include"nav.php";?>
				</div>
			</div>
		</header>
		<!-- end header -->
		<section id="featured" class="bg">
			<!-- start slider -->


			<!-- start slider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						<div id="main-slider" class="main-slider flexslider">
							<ul class="slides">
								<li>
									<img src="img/slides/flexslider/1.jpg" alt="" />
									<div class="flex-caption">
										<h3>Modern Design</h3>

										<a href="#" class="btn btn-theme">Learn More</a>
									</div>
								</li>
								<li>
									<img src="img/slides/flexslider/2.jpg" alt="" />
									<div class="flex-caption">
									</div>
								</li>
								
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>


		</section>
		

		<section id="content">

			<div class="container marginbot50">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="heading">Recent</h4>

						


						<div id="grid-container" class="cbp-l-grid-projects">
							<ul>
								<?php
							$result=select("select * from glass ");
							while($r=mysqli_fetch_array($result))
							{extract($r);
							?>
								<li class="cbp-item graphic">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="admin/images/<?=$image?>" alt="" style="width:250px;height:100px"/>
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
													<a href="admin/images/<?=$image?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title"><?=$name?></div>
									<div class="cbp-l-grid-projects-desc" style="font-weight:bold;color:red">Price-<?=$price?>/-</div>
								</li>
								
								<?php
							}
								?>
								
								
								
								
							</ul>
						</div>

						

					</div>
				</div>
			</div>


			

		</section>

		<?php include"footer.php";?>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>


	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
	<script src="plugins/flexslider/flexslider.config.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>


</body>

</html>
