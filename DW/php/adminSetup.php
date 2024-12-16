<?php
     include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Set Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="sign.css">
    
</head>
<body>

<div class="container my-5">
    <h2>List of users</h2>
    <div class="position">
            <a href="admin.php" type="button" class="btn btn-warning">Back Admin LogIn</a>
            </div> <br>
    <br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $sql = "SELECT * FROM user";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['uid']; ?></td>
                    <td><?php echo $row['ufName']; ?></td>
                    <td><?php echo $row['ulName']; ?></td>
                    <td><?php echo $row['uemail']; ?></td>
                    <td><?php echo $row['upassword']; ?></td>
                    <td><?php echo $row['uaddress']; ?></td>
                    <td><a class="btn btn-info" href="edit.php?id=<?php echo $row['uid']; ?>">Edit</a>
                     &nbsp;
                     <a class="btn btn-danger" href="delete.php?id=<?php echo $row['uid']; ?>">Delete</a>
                    </td>
                    </tr>
        <?php       }
            }   
        ?>
        </tbody>
    </table>

</div>

  
</body>
</html>