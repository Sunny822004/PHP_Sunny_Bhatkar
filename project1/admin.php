<?php
// session_start();
// if(isset($_SESSION['uid']))
// {
// 	header("location:admin.php");
// }

if(isset($_POST['noticebtn']))
{
	include("dbconnect.php");
	$notice = $_POST["notice"];
	$sql = "INSERT INTO `notice` (`notice`) VALUES ('$notice')";

	$result = mysqli_query($connect, $sql);
	if($result)
	{
		?><script> alert( " notic addd successfully");</script> <?php 
	}
	else
	{
		?><script> alert( "something went wrong");</script> <?php 
	}

} 

?>

<!DOCTYPE html>
<html>
<head>
	<title> Admine </title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


			<style>
			  body h2 {
				text-align: center;
				}
			</style>

</head>
<body>
	<h2> Welocome admin</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<form method="post">
					<div class="form-group">
						<label> add notice</label>
						<textarea name="notice" placeholder="Enter notice here" class="form-control"></textarea>
					</div>
					<button class="btn btn-success"  name="noticebtn" > add </button>
				</form>				
			</div>
		</div>
	</div>
</body>
</html>