<?php

session_start();
    $uname=$_SESSION["username"];
    $role=$_SESSION["user"];
    //$query4="select * from tbl_login where username='$uname' and role='$role'";
    //$check=mysql_query($query4)or die(mysql_error());
  /*if( $role!='admin')
   {
          echo "<script>alert('Login Failed');</script>";
    } */
	//echo $uname;
	//echo $role;


include('connection.php');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$id=$_GET['id'];
$name=$_GET['name'];
$author=$_GET['author'];
$publication=$_GET['publication'];
$price=$_GET['price'];
$edition=$_GET['edition'];
$isbn=$_GET['isbn'];
$_SESSION['bid']=$id;
$_SESSION['price']=$price;
$sql = "Select * from tbl_book b where b.bid=$id";
//echo " $sql";
mysqli_query($conn, $sql);

echo "<table border=0 align=center width=50%><tr>";
//echo "<td><tr><td>Name</td></tr><tr><td>Author</td></tr><tr><td>Publication</td></tr><tr><td>Price</td></tr><tr><td>ISBN</td></tr><tr><td>Edition</td></tr></td>";
echo "<img  width=100 height=100 src=uploads\\".$id.".jpg><td><tr><td>Name</td><td>$name</td></tr><tr><td>Author</td><td>$author</td></tr><tr><td>publication</td><td>$publication</td></tr><tr><td>Price</td><td>$price</td></tr><tr><td>ISBN</td><td>$isbn</td></tr><tr><td>Edition</td><td>$edition</td></tr></td>";
//echo " <tr><td><button >ADD TO CART</button></td><td><button>BUY</button></td></tr>";

echo " <tr><td>
<form action='cartnew.php' method=post>
<input type=hidden name=id value='<?php echo $id; ?>'>
<input type=submit value='ADD TO CART' ></form>

</td></tr>";
/*
<tr>
<td><form action='add_to_buylist.php' method=post>
<input type=hidden name=id value='<?php echo $id; ?>'>
<input type=submit value='BUY' ></form></td></tr>";
*/


//echo "<img width=100 height=100 src=uploads\\".$id.".jpg><tr><td>$id</td><td>$fname</td><td>$lname</td><td>$email</td><th><a href='activateuser.php?id=$uid&name=$fname'>Activate User</a></th></tr>";




mysqli_close($conn);


?>
