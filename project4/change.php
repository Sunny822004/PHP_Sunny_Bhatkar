<?php
if(isset($_POST["resetbtn"]))
{
	include("dbconnect.php");
	$name = $_POST['name'];
	$mob = $_POST['mobile'];
	$qry = "SELECT * FROM 'user' WHERE username ='$name' AND mobile ='$mob' ";

	$result = mysqli_query($connect, $qry);
	$data = mysqli_fetch_assoc($result);
	$id = $data["id"];
	$row = mysqli_num_rows($result);

	if($row>0)
	{
		$pass = randompassword();
		$qur = "UPDATE 'user' SET 'password'='$pass' WHERE id = '$d' ";
		$result = mysqli_query($connect, $qry);
		echo "password reset successfully";
	}
	else
	{
		echo "Invali username or Mobile Number";
	}
}
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}	 
?>



<html>
<head>
	<title>project 1</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	
	<style>
		#photo{
			background-image: url("image/bg.png");
			background-repeat: no-repeat;
			background-size: cover;

		}
		.card{
			margin-top:20%;
		}
		.card-header{
			background-image: url("image/log.png");
			background-size: cover;
		}
	</style>

</head>
<body id="photo">


	<div class="container">
		<div class="row">
			<div class=" col-md-5 mx-auto">
				<div class="card">
					<div class="card-header">
						<b>change password</b>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>user name</label>
								<input type="text" name="name" placeholder="fullname" class="form-control">
							</div>
							<div class="form-group">
								<label>Contact number</label>
								<input type="tel" name="mobile" placeholder="Mobile number" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-success" type="submit" name="resetbtn">change </button>
							</div>
							<div class="form-group">
								<p>password - <?php echo $pass ?>, kindly copy pssword, password change</p>
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
