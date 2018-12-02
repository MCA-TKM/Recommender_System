<?php
session_start();
    $uname=$_SESSION["username"];
    $role=$_SESSION["user"];
	$bookid=$_SESSION["bid"];
	$price=$_SESSION["price"];
    //$query4="select * from tbl_login where username='$uname' and role='$role'";
    //$check=mysql_query($query4)or die(mysql_error());
  /*if( $role!='admin')
   {
          echo "<script>alert('Login Failed');</script>";
    } */
	echo $uname;
	echo $role;
	echo $bookid;


include('connection.php');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$sql="select uid from tbl_user_reg where email='$uname'";
$data=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($data))
{
$id=$row['uid'];
}


$deleteCart="delete from tbl_cart  where tbl_cart.bid=$bookid and tbl_cart.uid=$id";
//echo $deleteCart;
mysqli_query($conn,$deleteCart);
echo "<script>window.location.assign('viewcart.php');</script>";











//$s="insert into tbl_user_transaction (billno,bid,quantity,amount) values($mx,$bookid,1,$price)";


//mysqli_query($conn,$s);

//$remove="delete from tbl_cart_master"


?>