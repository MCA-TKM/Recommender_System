<!DOCTYPE html>
<html>
<body>

<form action="#" method=post>
  <center>

  <table >
    <tr><td><h2 align="center" >REGISTRATION</h2></td></tr>
<tr></tr>
  <tr width="100" height="30"><td>First Name</td>
 <td> <input type="text" name="fname"></td>
  
  <td>Last Name:</td>
  <td><input type="text" name="lname"></td></tr>
  <br>
  <tr ></tr>
  <tr width="100" height="30"><td>
Phone Number:</td>
 <td> <input type="text" name="phno"></td></tr>
  <br>
  <tr>
  </tr>
<tr width="100" height="30"><td>
Email ID:</td>
 <td> <input type="email" name="email"></td></tr>
  <br>
<tr>
</tr>
<tr>
</tr>
<br><tr width="100" height="100"><td></td><td>
  <input type="submit" value="Register" name="submit"></td></tr>
  </table>
</center>
</form> 

<?php
/*  if(isset($_POST['submit']))
 {
 $rollno=$_POST['rollno'];
 $name=$_POST['name'];
 $age=$_POST['age'];
 $sex=$_POST['sex'];
 echo "$name";


$conn=mysqli_connect("localhost","root","","sample");


$s="insert into sample1 values('$rollno','$name','$age','$sex')";
mysqli_query($conn, $s);
echo "inserted";
}
else
echo "failed"; */
?>



</body>
</html>