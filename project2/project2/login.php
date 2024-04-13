<?php
    $valid_username = "user123";
    $valid_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        echo "<p>Welcome, $username!</p>";
        
         header("Location:user.php");
        
    } else {
        ?><script> alert( " Invalid email and password");</script> <?php
        
} 
}

?>







<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body{
            background-image: url("image/bg.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card{
            margin-top: 20%;
        }
        .card-header{
            background-image: url(image/log.png);
            background-size: cover;
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
                                <label>User name</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input type="password" name="password" placeholder="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="button">login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
