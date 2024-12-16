<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Edit</title>
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
<?php
include "config.php";
    if (isset($_POST['edit'])) {
        $i = $_POST['uId'];
        $fn = $_POST['fName'];
        $ln = $_POST['lName'];
        $e = $_POST['uEmail'];
        $p = $_POST['uPassword'];
        $a = $_POST['uAddress'];
        $sql = "UPDATE `user` SET `ufName`='$fn',`ulName`='$ln',`uemail`='$e',`upassword`='$p',`uaddress`='$a' WHERE `uid`='$i'";
        $result = $con->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
            header('Location: adminSetup.php');
        }else{
            echo "Error:" . $sql . "<br>" . $con->error;
        }

    }

if (isset($_GET['id'])) {
    $u_id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE uid='$u_id'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $uId = $row['uid'];
            $fName = $row['ufName'];
            $lName = $row['ulName'];
            $uEmail = $row['uemail'];
            $uPassword = $row['upassword'];
            $uAddress = $row['uaddress'];
        }
    ?>

        <h2 class="heading">Student details Update Form</h2><br>
        <form action=""  class="form-gp" method="post">
          <fieldset>
            <div class="position">
            <a href="adminSetup.php" type="button" class="btn btn-warning">Back</a>
            </div> <br>
            <input type="hidden"  name="uId" value="<?php echo $uId; ?>"> <br>
            First Name:<br>
            <input type="text" class="form-control" name="fName" value="<?php echo $fName; ?>">
            Last Name:<br>
            <input type="text" class="form-control" name="lName" value="<?php echo $lName; ?>">
            Email:<br>
            <input type="email" class="form-control" name="uEmail" value="<?php echo $uEmail; ?>">
            <br>
            Password: <br>
            <input type="password" class="form-control" name="uPassword" value="<?php echo $uPassword; ?>">
            Address:<br>
            <input type="text" class="form-control" name="uAddress" value="<?php echo $uAddress; ?>">
            <br><br>
            <input type="submit" class="btn btn-primary Button" value="Edit" name="edit">
          </fieldset>
        </form>
        </body>
        </html>


    <?php
    } else{
        header('Location: adminSetupx.php');
    }
}
?>
