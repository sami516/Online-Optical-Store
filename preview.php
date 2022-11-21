<?php
include"admin/dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sailor - Preview</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
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
			
			<?php
			include"nav.php";
			?>
		</header>
		<!-- end header -->
		
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
					<?php
					$result1=select("SELECT * FROM `customer_problem` 
					INNER JOIN problem on customer_problem.problem=problem.problemid 
					where customer_problem.userid='".$_SESSION['userid']."' and customer_problem.status='1'");
					
					$result=select("select * from glass where glassid='".$_REQUEST['id']."'");
					while($r1=mysqli_fetch_array($result1))
					{extract($r1);
					while($r=mysqli_fetch_array($result))
					{extract($r);
					?>
						<h3><?=ucwords($name)?></h3>
						<img src="admin/images/<?=$image?>" alt="" class="img-responsive" />



						
					</div>

					<div class="col-lg-4">
						<aside class="right-sidebar">
							
							
							
							<div class="widget">
								<h5 class="widgetheading">Information</h5>
								<ul class="tags">
									<li><a href="#">Name- <?=$name?></a></li></br>
									<li><a href="#">Frame Price- <?=$price?>/-</a></li></br>
									<li><a href="#">Lens Price- <?=$charge?>/-</a></li></br>

									<li><a href="#">Eye Power- <?=$eyepower?></a></li></br>
									<li><a href="#">Total Amount- <?=$price+$charge?> /-</a></li></br>
									
									
								</ul><span style="font-weight:bold">Description-</span><p style="text-align:justify"> <?=$description?></p>
								<a  href="payment.php?m=<?=$price+$charge?>"><button class="btn btn-success">Order Now
								</button>
							</div>
						</aside>
					</div>

				</div>
<?php
					}
					}
?>

			</div>
		</section>

		<?php
		include"footer.php";
		?>

	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
>
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
