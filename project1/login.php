<?php

	if(isset($_POST['button']))
	{
		include("dbconnect.php");

		$email = $_POST["email"];
  	    $pass = $_POST["password"];
  	    
  	    if($email == "admin" && $pass=="admin")
  	    {
  	    	header("location:admin.php");
  		}

		$sql = "SELECT * FROM `register` WHERE email ='$email' AND password = '$pass'";


		 $result = mysqli_query($connect, $sql);
		$rows = mysqli_num_rows($result);

		 if($rows>0)
		  {
			$data = mysqli_fetch_assoc($result);
			// session_start();
			// $_SESSION['uid'] = $data["id"];
		 	header("location:user.php");
		  }
		 else
		 {
		 	?><script> alert( " Invalid email and password");</script> <?php
		  }

	} 
?>



<html>


<head>
	<title> login form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<style>
		body{
			background-image: url("image/login.png");
			background-repeat: no-repeat;
			background-size: cover;
		}
		.card{
			margin-top: 20%;
		}

	</style>

</head>


<body>
	<div class="container">
		<div class="row">
			<div class=" col-md-5 mx-auto">
				<div class="card">
					<div class="card-header bg-success">
						<b>login form</b>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>Email id</label>
								<input type="text" name="email" placeholder="sam@gamil.com" class="form-control">
							</div>
							<div class="form-group">
								<label>password</label>
								<input type="password" name="password" placeholder="password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-primary" type="submit" name="button">login</button>
							</div>
							<p>Don't have an account? <a href="register.php"> sign up </a> </p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>