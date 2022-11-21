<?php
include"admin/dbconfig.php";
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sailor - Login</title>
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
			
<?php include"nav.php";?>
		</header>
		<!-- end header -->
		
		<section id="content">
			<div class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<form role="form" method="post" class="register-form">
							<h2>Sign in <small>manage your account</small></h2>
							<hr class="colorgraph">

							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-lg" name="password" id="exampleInputPassword1" placeholder="Password">
							</div>

							

							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-12 col-md-6"><input type="submit"  name="login" value="Sign in" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
								<div class="col-xs-12 col-md-6">Don't have an account? <a href="register.php">Register</a></div>
							</div>
						</form>
						<?php
						
						if(isset($_REQUEST['login']))
	{
		
	extract($_REQUEST);
	$query="select * from registration where email='$email' and password='$password'";
	
	
	
	
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		$_SESSION['userid']=$reg_id;
		$_SESSION['Name']=$name;
		//$_SESSION['image']=$image;
		$_SESSION['login']="yes";
		
		//print_r($_SESSION);
		
		header("location:index.php");
	}
	else
	{
		echo"email or password is incorrect";
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
	<!-- javascript -->
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
