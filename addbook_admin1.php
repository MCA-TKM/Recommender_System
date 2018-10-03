<!DOCTYPE html>
<html>

<body>
<form action="#" method=post>
  <center>

  <table bgcolor="white">
    <tr><td><strong>BOOK REGISTRATION</strong></td></tr>
	  <tr width="100" height="30"><td>Name:</td>
 <td> <input type="text" name="name"></td></tr>
  <br>
  <tr width="100" height="30"><td>Author:</td>
  <td><input type="text" name="author"></td></tr>
  <br>
  <tr width="100" height="30"><td>Price:</td>
  <td><input type="text" name="price"></td></tr>
  <br>
  <tr width="100" height="30"><td>Edition:</td>
  <td><input type="text" name="edition"></td></tr>
  <br>
  <tr width="100" height="30"><td>Publication:</td>
  <td><input type="text" name="publication"></td></tr>
  <br>
  <tr width="100" height="30"><td>ISBN:</td>
 <td> <input type="text" name="isbn"></td></tr>
  <br>

  
  
  <tr width="100" height="30"><td><strong>Upload image:</strong></td> 
<td><input type="file" name="file" /></td></tr><br>

 <tr width="100" height="30"><td>No of Copies</td>
  <td><input type="number" name="number"></td></tr>
  <br>
   
  <tr width="100" height="30"><td>Description:</td>
  <td><input type="text" name="description"></td></tr>
  <br>
  

<br><tr width="100" height="30"><td>
  <input type="submit" value="Submit" name="submit"></td></tr>
  </table>
</center>
</form> 

<?php

 include("connection.php");

 if(isset($_POST['submit']))
 {
 $name=$_POST['name'];
 $author=$_POST['author'];
 $price=$_POST['price'];
 $edition=$_POST['edition'];
  $publication=$_POST['publication'];
 $isbn=$_POST['isbn'];
 echo "$name";

 
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$s="insert into tbl_book values(8,'$name','$author','$price','$edition','$publication','$isbn')";
mysqli_query($conn, $s);

}

 
?>



</body>
</html>