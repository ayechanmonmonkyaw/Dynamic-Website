<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
        <div class="heading">
            <h1>Social Media Campaigns company</h1>
        </div><br>
        <div class="form bg-info">
            <h2>Administrator Log In</h2><br>
            <div class="form-gp">
                <form action="admin.php" method="post">
                   <input type="text" class="form-control" name="adminuser" placeholder="User name" autofocus="autofocus"><br>
                   <input type="password" class="form-control" name="password" placeholder="Password"><br>
                   <button type="submit" class="btn btn-primary Button" name="logIn">Log In</button><br>
                   <button type="reset" class="btn btn-primary Button">RESET</button><br><br>
                </form>
                <br>
                <div>
                    <span>If you are a user, go to </span>
                    <a href="sign.php">Sign Up</a>
                </div>
            </div>
        </div>

 <?php
include 'config.php';

if (isset($_POST['logIn'])) 
{
	$a_user=$_POST['adminuser'];
	$Pw=$_POST['password'];

	if ($a_user=="admin" && $Pw =="smc123") 
	{
	
		// ------------------------------------------
		echo "<script>
		window.alert('Login Successful. Click OK to go admin set up page.');
		window.location='adminSetup.php';
		</script>";


	}

	 else 
	{
		
		echo "<script>
		window.alert('Invalid username or password');
		window.location='admin.php';
		</script>";

	}
}

?>

</body>
</html>