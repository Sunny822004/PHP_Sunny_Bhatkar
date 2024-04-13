<?php

include("dbconnect.php");

$sql = "SELECT * FROM `notice` order by id desc limit 5";
$result = mysqli_query($connect, $sql);
$row = mysqli_num_rows($result)

?> 

 
<!DOCTYPE html>
<html>
<head>
	
	<title> user</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


		<style>
			.card-body{
				padding-left: 0px;
			}
			.card-header{
				color: white;
			}
			  body h2 {
				text-align: center;
				}
				.card {
				 margin-top:40px;
				}
		</style>
</head>
<body>
	<h2>user</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header bg-dark">Notice</div>
						<marquee direction="up" onmouseover="this.stop();" onmouseout ="this.start();">
						<div class="card-body">
							<ul>
							<?php	if($row>0)
								{
									while($data= mysqli_fetch_assoc($result))
								{ ?>
									<li> <?php echo $data["notice"]; ?> </li>
									<?php 
								}
								}
								else
									{ ?>
									<li>no notic found</li>
									<?php } ?>
								</marquee>
							</ul>
						</div>
					</div>						
				</div>
			</div>					
		</div>
	</div>

</body>
</html>