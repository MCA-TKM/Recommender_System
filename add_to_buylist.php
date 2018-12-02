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
	//echo $uname;
	//echo $role;
	//echo $bookid;


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
$date=date("Y-m-d");
//echo $date;
//echo $data;

$time=date('H:i:s');


$sq="insert into tbl_user_book_master (uid,date,time,discount) values($id,'$date','$time',0)";
//mysqli_query($conn,$sql);
//echo $sq;

mysqli_query($conn,$sq);

$sql="Select max(billno) as mx from tbl_user_book_master";
$data=mysqli_query($conn,$sql);

$mx=0;
while($row=mysqli_fetch_array($data))
{
$mx=$row['mx'];


}
//echo $mx;



$cart="Select bid from tbl_cart m where  m.uid=$id";
$data=mysqli_query($conn,$cart);

$count=0;
while($row=mysqli_fetch_array($data))
{
$bid=$row['bid'];
//$_SESSION['bid']=$id;


$book="Select price from tbl_book b where b.bid=$bid";

$prc=mysqli_query($conn,$book);
if($rw=mysqli_fetch_array($prc))
{
$bookprice=$rw['price'];
//echo $bookprice;
}
//$price=$prc['price'];
//echo $bookprice;


$s="insert into tbl_user_transaction (billno,bid,quantity,amount) values($mx,$bid,1,$bookprice)";
//echo $s;
mysqli_query($conn,$s);

$deleteCart="delete from tbl_cart  where tbl_cart.bid=$bid and tbl_cart.uid=$id";
//echo $deleteCart;
mysqli_query($conn,$deleteCart);


}


echo "<script>window.location.assign('product.php');</script>";







//$s="insert into tbl_user_transaction (billno,bid,quantity,amount) values($mx,$bookid,1,$price)";


//mysqli_query($conn,$s);

//$remove="delete from tbl_cart_master"


?>