<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
     <!--bootstrap link-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--icon link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!--sign css-->
    <link rel="stylesheet" href="sign.css">
</head>
<body>
    <div class="bg-img">
        <div class="heading">
            <h1>Social Media Campaigns company</h1>
        </div><br>
        <div class="form bg-info">
            <h2>Sign Up</h2><br>
            <span>Already have an account?</span>
                <a href="logIn.php">Log In</a><br><br>
            <div class="form-gp">
                <form action="sign.php" method="post">
                   <input type="text" class="form-control" name="fName" placeholder="First Name" autofocus="autofocus"><br>
                   <input type="text" class="form-control" name="lName" placeholder="Last Name"><br>
                   <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
                   <input type="password" class="form-control" name="password" placeholder="Password"><br>
                   <input type="text" class="form-control" name="address" placeholder="Address"><br>
                   <button type="submit" class="btn btn-primary Button" name="Reg">CREATE ACCOUNT</button><br>
                   <button type="reset" class="btn btn-primary Button">RESET</button><br><br>
                </form>
                <br>
                <div>
                    <span>Are you an admin?</span>
                    <a href="admin.php">Admin_logIn</a>
                </div>
            </div>
        </div>
    </div>
<?php

	include 'config.php';
    if(isset($_POST['Reg']))
    {
        $fname = $_POST['fName'];
        $lname = $_POST['lName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $pw = $_POST['password'];
        $insert = "INSERT INTO `user`(`ufName`, `ulName`, `uemail`,`upassword`, `uaddress`) VALUES ('$fname','$lname','$email','$pw','$address')";

        $data = mysqli_query($con,$insert);
        if($data)
        {
            header('Location: logIn.php');
        }
        else
        {
            echo 'Registration failed!'; 
        }
    }
	
?>

    
</body>
</html>