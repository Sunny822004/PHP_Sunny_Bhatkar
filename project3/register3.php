<?php
if(isset($_POST['button'])){

	include("dbconnect.php");

	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
    $pass = $_POST["password"] ;
    $cont = $_POST["contact"];

     $sql = " INSERT INTO `register`(`id`, `full name`, `email`, `password`, `contact`) VALUES ('null','$fullname','$email','$pass','$cont')";

  	$result = mysqli_query($connect, $sql);

		if($result)
		 {
		  ?><script> alert( " Registration successfully");</script> <?php 
		 }
		else{
		  ?><script> alert( "something went wrong");</script> <?php 
		}


    }
 
?>



<html>
<head>
	<title>project 3</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	
	<style>
		#photo{
			background-image: url("image/log.png");
			background-repeat: no-repeat;
			background-size: cover;

		}
		.card{
			margin-top:20%;
		}
		.card-header{
			background-image: url(image/bg.png);
			
			
		}
	</style>

</head>
<body id="photo">


	<div class="container">
		<div class="row">
			<div class=" col-md-5 mx-auto">
				<div class="card">
					<div class="card-header">
						<b>Registration form</b>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>Full name</label>
								<input type="text" name="fullname" placeholder="fullname" class="form-control">
							</div>
							<div class="form-group">
								<label>Email id</label>
								<input type="Email" name="email" placeholder="sam@gamil.com" class="form-control">
							</div>
							<div class="form-group">
								<label> creat password</label>
								<input type="password" name="password" placeholder="password" class="form-control">
							</div>
							<div class="form-group">
								<label>Contact number</label>
								<input type="tel" name="contact" placeholder="Mobile number" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-success" type="submit" name="button">Register</button>
								
							</div>
						</form>
					</div>

			</div>
		</div>
	</div>









<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>