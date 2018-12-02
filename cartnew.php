



<?php

session_start();
    $uname=$_SESSION["username"];
    $role=$_SESSION["user"];
	$bookid=$_SESSION["bid"];
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


$sq="insert into tbl_cart (uid,date,time,bid,no_of_copies) values($id,'$date','$time',$bookid,1)";
//mysqli_query($con,$sql);
//echo $sq;

mysqli_query($conn,$sq);


$sql="Select * from tbl_cart  c, tbl_book b where  c.bid=b.bid and c.uid=$id ";
$data=mysqli_query($conn,$sql);

//$new="select * from tbl_cart c where c.uid=$id";

echo "<table border=1 align=center ><tr>";
$count=0;
while($row=mysqli_fetch_array($data))
{
$id=$row['bid'];
//echo $id;
//$_SESSION['bid']=$id;
$name=$row['name'];
//$author=$row['author'];
//$publication=$row['publication'];
$price=$row['price'];
//$edition=$row['edition'];
$isbn=$row['isbn'];
//echo "<td><a href='view_cartlist.php?id=$id&name=$name&price=$price&isbn=$isbn'><img width=100 height=100 src=uploads\\".$id.".jpg></a></td><td></td><br>";
/*$count=$count+1;
if($count==4)
{

	echo "<tr>";
	$count=0;
}
*/
echo "<table border=0 align=center width=50%><tr>";
//echo "<td><tr><td>Name</td></tr><tr><td>Author</td></tr><tr><td>Publication</td></tr><tr><td>Price</td></tr><tr><td>ISBN</td></tr><tr><td>Edition</td></tr></td>";
echo "<img width=100 height=100 src=uploads\\".$id.".jpg><td><tr><td>Name</td><td>$name</td></tr><tr><td>Price</td><td>$price</td></tr><tr><td>ISBN</td><td>$isbn</td></tr></td>";
//echo " <tr><td><button >ADD TO CART</button></td><td><button>BUY</button></td></tr>";

echo " <tr><td>
<form action='remove_from_cart.php' method=post>
<input type=hidden name=id value='$id' >
<input type=submit value='REMOVE FROM CART' ></form>

</td></tr>";
}
echo " <tr><td></td><td><form action='add_to_buylist.php' method=post>
<input type=hidden name=id value='<?php echo $id; ?>'>
<input type=submit value='BUY' ></form></td></tr>";
mysqli_close($conn);

?>

