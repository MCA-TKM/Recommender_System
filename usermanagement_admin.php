<?php

$con=mysqli_connect("localhost","root","","recommender");

$sql="Select r.uid,r.fname,r.lname,r.email,l.status from tbl_user_reg r, tbluserlogin l where r.uid=l.uid and l.status=0";
//echo "$sql";

$data=mysqli_query($con,$sql);
echo "<table border=1 align=center width=50%>";
echo "<tr><th>User ID</th><th>Fisrt Name</th><th>Last Name</th><th>Email</th><th>Approve</th></tr>";
while($row=mysqli_fetch_array($data))
{
 $uid=$row['uid'];
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];

echo "<tr><td>$uid</td><td>$fname</td><td>$lname</td><td>$email</td><th><a href='activateuser.php?id=$uid&name=$fname'>Activate User</a></th></tr>";

}

mysqli_close($con);

?>