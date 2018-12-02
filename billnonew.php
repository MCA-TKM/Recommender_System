<?php
//session_start();
    $uname=$_SESSION["username"];
    $role=$_SESSION["user"];
	include('connection.php');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
echo "<table bordercolor='green' border='0' align='center'>
<tr>";
$count=0;
$sql="select distinct alsobuy from tbl_frequent";
$data=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($data))
{
$bookbuy=$row['alsobuy'];
$recommend="select distinct * from tbl_book b where b.bid=$bookbuy";
$data4=mysqli_query($conn,$recommend);
while($row=mysqli_fetch_array($data4))
{
	
$id=$row['bid'];
//$_SESSION['bid']=$id;
$name=$row['name'];
$author=$row['author'];
$publication=$row['publication'];
$price=$row['price'];
$edition=$row['edition'];
$isbn=$row['isbn'];

echo"<th><table bgcolor='white'>
            <th ><a href='reguser_book_details.php?id=$id&name=$name&author=$author&publication=$publication&price=$price&edition=$edition&isbn=$isbn'>
			<img src=uploads\\".$id.".jpg alt='Go to W3Schools!' width='300' height='300' border='0'><table bgcolor='blue'><th width='300' height='25'>".$name."</th></table>
			</th>
           
       </table>
</th><th width='25'></th>
";

//echo "<td><a href='reguser_book_details.php?id=$id&name=$name&author=$author&publication=$publication&price=$price&edition=$edition&isbn=$isbn'><img width=100 height=100 src=uploads\\".$id.".jpg></a>";
$count=$count+1;
if($count==3)
{
    echo"<tr height='50'>";
	echo "<tr>";
	$count=0;
}

}

	

}
mysqli_close($conn);




?>