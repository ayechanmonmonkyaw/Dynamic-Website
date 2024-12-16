​<?php
include ('config.php');
if (isset($_GET['id'])) {
    $uid = $_GET['id'];
    $sql = "DELETE FROM user WHERE uid ='$uid'";
     $result = $con->query($sql);
     if ($result == TRUE) {
        echo "<script>
		window.alert('Delete Successfully');
		window.location='adminSetup.php';
		</script>";
    }else{
        echo "Error:" . $sql . "<br>" . $con->error;
    }
}
?>