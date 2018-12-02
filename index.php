<?php include('header.php')?>
<?php

$con=mysqli_connect("localhost","root","","recommender");

$sql="Select * from tbl_book ";
$data=mysqli_query($con,$sql);
echo "<table border=0 align=center cellpadding=30 cellspacing=30><tr>";
$count=0;
while($row=mysqli_fetch_array($data))
{
$id=$row['bid'];
$_SESSION['bid']=$id;
$name=$row['name'];
$author=$row['author'];
$publication=$row['publication'];
$price=$row['price'];
$edition=$row['edition'];
$isbn=$row['isbn'];
echo "<td><a href='reguser_book_details.php?id=$id&name=$name&author=$author&publication=$publication&price=$price&edition=$edition&isbn=$isbn'><img width=150 height=150 src=uploads\\".$id.".jpg></a></td>";
$count=$count+1;
if($count==4)
{

	echo "<tr>";
	$count=0;
}


}

mysqli_close($con);

?>