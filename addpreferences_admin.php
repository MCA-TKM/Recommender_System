<!DOCTYPE html>
<html>

<body>
<form action="#" method=post>
  <center>

  <table>
    <tr><td><strong>ADD PREFERENCES</strong></td></tr>
	

  <tr><td>Preference Name :</td>
 <td> <input type="text" name="name"></td></tr>
  <br>
  <br><tr><td>
  <input type="submit" value="Submit" name="submit"></td></tr>
  </table>
</center>
</form> 

<?php
 if(isset($_POST['submit']))
 {
 $name=$_POST['name'];
 
 echo "$name";

 
 
 


$conn=mysqli_connect("localhost","root","","recommender");
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}



$s="insert into tbl_preference values(8,'$name',0)";
mysqli_query($conn, $s);
echo "inserted";
}

?>



</body>
</html>

