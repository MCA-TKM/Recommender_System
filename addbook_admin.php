<!DOCTYPE html>
<html>

<body>
<form action="#" method="post" enctype="multipart/form-data">
  <center>

  <table>
    <tr><td><strong>BOOK REGISTRATION</strong></td></tr>
	

  <tr><td>Name:</td>
 <td> <input type="text" name="name"></td></tr>
  <br>
  <tr><td>Author:</td>
  <td><input type="text" name="author"></td></tr>
  <br>
  <tr><td>Price:</td>
  <td><input type="text" name="price"></td></tr>
  <br>
  <tr><td>Edition:</td>
  <td><input type="text" name="edition"></td></tr>
  <br>
  <tr><td>Publication:</td>
  <td><input type="text" name="publication"></td></tr>
  <br>
  <tr><td>ISBN:</td>
 <td> <input type="text" name="isbn"></td></tr>
  <br>

  
  
  <tr><td><strong>Upload image:</strong></td> 
<td><input type="file" name="fileToUpload"  id="fileToUpload"/></td></tr><br>

 <tr><td>No of Copies</td>
  <td><input type="number" name="number"></td></tr>
  <br>
   
  <tr><td>Description:</td>
  <td><textarea name="description"></textarea></td></tr>
  <br>
  

<br><tr><td>
  <input type="submit" value="Submit" name="submit"></td></tr>
  </table>
</center>
</form> 

<?php
$id=7;
 if(isset($_POST['submit']))
 {
 $name=$_POST['name'];
 $author=$_POST['author'];
 $price=$_POST['price'];
 $edition=$_POST['edition'];
  $publication=$_POST['publication'];
 $isbn=$_POST['isbn'];
 echo "$name";

$conn=mysqli_connect("localhost","root","","recommender");
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}




$s="insert into tbl_book (name,author,price,edition,publication,isbn) values('$name','$author','$price','$edition','$publication','$isbn')";
mysqli_query($conn, $s);

$target_dir = "uploads/";
$target_file=$target_dir.$id.".jpg";

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) or die('Error'. mysql_error());
//header('location:home.php');


//echo "inserted";
}

?>



</body>
</html>