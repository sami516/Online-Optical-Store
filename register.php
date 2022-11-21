<?php
include"admin/dbconfig.php";
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sailor - Register</title>
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
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<form role="form" method="post"  class="register-form">
							<h2>Please Sign Up <small>It's free and always will be.</small></h2>
							<hr class="colorgraph">
							
									<div class="form-group">
										<input type="text" name="name" id="first_name" class="form-control input-lg" placeholder=" Name" tabindex="1">
									</div>
								
							<div class="form-group">
										<input type="text" name="mobile" id="first_name" class="form-control input-lg" placeholder=" Mobile" tabindex="1">
									</div>
							
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
									</div>
								</div>
							</div>
							
							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-12 col-md-6"><input type="submit" value="Register" name="register" class="btn btn-theme btn-block btn-lg" tabindex="7"></div>
								<div class="col-xs-12 col-md-6">Already have an account? <a href="login.php">Sign In</a></div>
							</div>
						</form>
						<?php
						if(isset($_REQUEST['register']))
						{
							extract($_REQUEST);
							$n=iud("INSERT INTO `registration`( `name`, `mobile`, `email`, `password`) VALUES ('$name','$mobile','$email','$password') ");
							if($n==1)
							{
								echo"<script>alert('successful');
								window.location='login.php';
								</script>";
							}
						}
						?>
					</div>
				</div>

			</div>
		</section>

		<?php include"footer.php";?>

	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript-->
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
