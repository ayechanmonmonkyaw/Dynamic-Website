<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
            <h1>Log In</h1>
            <span>Your account is created.</span>
            <h2>Congratulations!</h2>
            <span>Please log in</span><br><br>
            <div class="form-gp">
                <form name="f1" action="loginattempt.php" onsubmit="return validation()" method="post">
                   <input type="email" class="form-control" name="email" placeholder="E-mail" autofocus="autofocus"><br>
                   <input type="password" class="form-control" name="password" placeholder="Password"><br>
                   <button type="submit" class="btn btn-primary Button" name="btn_submit">Log In</button><br><br>
                   <button type="reset" class="btn btn-primary Button">RESET</button><br><br>
                   <h6>If you don't have an account, let's create</h6>
                   <a href="sign.php">Sign Up</a>
                </form>
            </div>
    </div>
 
    <script>
        function validation()
        {
            var em = document.f1.email.value;
            var pw = document.f1.password.value;
            if(em.length=="" && pw.length=="")
            {
                alert("Please fill First name, last name, email, password and address");
                return false;
            }
            else
            {
                if(em.length==""){
                    alert("Email is empty");
                    return false;
                }
                if(pw.length==""){
                    alert("Password is empty");
                    return false;
                }
            }
        }
    </script>

    
</body>
</html>