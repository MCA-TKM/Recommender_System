<?php
if(isset($_POST['submit']))
 {

$username=$_POST['username'];
$password=$_POST['password'];

$count1=0; $count2=0;
$count1=substr_count($username, "'");
$count2=substr_count($password, "'");
$err=0;
if ($count1>0 || $count2>0)
    $err=1;

$con = mysqli_connect("localhost","root","","recommender");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
//mysql_select_db("recommender", $con);
$sql="SELECT * from tbluserlogin l where l.username='".$username."' and l.password='".$password."' and status='1'";
//echo $sql;
$res = mysqli_query($con,$sql);
/*
if ($res === TRUE) {
    echo "success";
}
else {
    echo "error";
}
*/

//echo $res;

$flag=0;
while($row = mysqli_fetch_array($res))
  {
  $flag=1;
  $type=$row['type'];
  
    session_start(); 
    $_SESSION['user'] = $type; // store session data
    $_SESSION['username'] = $username;

  }
  
  
// echo $flag;
// echo $type;
 
 
  
  if($err>0)
      echo "<script>location.href='registration_user.php?msg=Invalid Username or Password'</script>";
  else if($flag==1 && $type=="admin")
       echo "<script>location.href='usermanagement_admin.php'</script>";
  else if($flag==1 && $type=="user")
        echo "<script>location.href='../userhomepage.php'</script>";
/* 
 else
   //echo "<script>location.href='homepage.php?msg=Invalid Username or Password'</script>"; 
    {
        echo "<script>alert('Login Failed');</script>";
        echo "<script>window.location.assign('homepage.php');</script>";
    } */
  
mysqli_close($con);
 }
?>