<?php 
include "config.php";

if(isset($_SESSION['error']))
	{
		$count=$_SESSION['error'];
		if ($count==3)
		{
			echo "<script>
					alert('3 Wrong Attempt: Please wait and try again');
					location.assign('LoginTimer.php');
				</script>";
		}
	}

if (isset($_POST['btn_submit'])) 
{
	$Email=$_POST['email'];
	$Pw=$_POST['password'];

	$select="SELECT * 
			FROM user
			WHERE uemail='$Email'
			AND upassword='$Pw'
			";
	$query=mysqli_query($con,$select);
    $count=mysqli_num_rows($query);

	if ($count>0) 
	{
		$data=mysqli_fetch_array($query);
		$UserID=$data['uid'];


     
		// ------------------------------------------
		echo "<script>
		window.alert('Login Successful. Ckick Ok to return home page');
		window.location='../home.html';
		</script>";
		$_SESSION['uid']=$UserID;

	}


	 else 
	{
		if (isset($_SESSION['error'])) 
			{
				$_SESSION['error']++;

			}
			else
			{
				$_SESSION['error']=1;
			}
		echo "<script>
		window.alert('Invalid Email or password');
		window.location='logIn.php';
		</script>";

	}
}
?>