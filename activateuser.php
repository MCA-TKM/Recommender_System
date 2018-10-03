<?php
include('connection.php');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$id=$_GET['id'];
$name=$_GET['name'];
$sql = "UPDATE  tbluserlogin l SET l.status=1 WHERE l.uid=$id";
echo " $sql";
mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:usermanagement_admin.php');
?>