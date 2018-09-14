<!DOCTYPE html>
<html>
<body>

<form action="#" method=post>
  <center>

  <table>
    <tr width="100" height="100"><td ><h1>LOGIN<h1></td></tr>

  <tr width="100" height="30"><td>USERNAME:</td>
 <td> <input type="text" name="username"></td></tr>
  <br>
  <tr width="100" height="30"><td>PASSWORD:</td>
  <td><input type="text" name="password"></td></tr>
  <br>


<br><tr width="100" height="30" align="center"><td>
  <input type="submit" value="Login" name="submit"></td></tr>
  <br><tr width="100" height="30" align="center"><td>
  <input type="button" value="Sign up" name="register" onclick="window.location.href='registration_user.php'"></td></tr>
  </table>
</center>
</form> 

<?php
 /* if(isset($_POST['submit']))
 {
 $username=$_POST['username'];
 $password=$_POST["password"];
 echo "$password";


$conn=mysqli_connect("localhost","root","","sample");


$s="insert into sample1 values('$username','$password')";
mysqli_query($conn, $s);
echo "inserted";
}
else
echo "failed"; */
?>



</body>
</html>