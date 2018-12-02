	<?php

//session_start();
   // $uname=$_SESSION["username"];
    //$role=$_SESSION["user"];
	
    //$query4="select * from tbl_login where username='$uname' and role='$role'";
    //$check=mysql_query($query4)or die(mysql_error());
  /*if( $role!='admin')
   {
          echo "<script>alert('Login Failed');</script>";
    } */
	
	//$uname="ak@gmail.com";
	//$role="user";
	//echo $uname;
	//echo $role;





$con=mysqli_connect("localhost","root","","recommender");

$sql="Select * from tbl_book ";
$data=mysqli_query($con,$sql);
echo '<div class="inner-block">
    <div class="product-block">
    	<div class="pro-head">
    		<h2>Products</h2>
    	</div>';
$count=0;
while($row=mysqli_fetch_array($data))
{
$id=$row['bid'];
//$_SESSION['bid']=$id;
$name=$row['name'];
$author=$row['author'];
$publication=$row['publication'];
$price=$row['price'];
$edition=$row['edition'];
$isbn=$row['isbn'];

//echo $name;

//echo "<td><a href='reguser_book_details.php?id=$id&name=$name&author=$author&publication=$publication&price=$price&edition=$edition&isbn=$isbn'><img width=100 height=100 src=uploads\\".$id.".jpg></a>";


echo'<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a  data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src=..\uploads\\'.$id.'.jpg alt="">
					</div>
	    		<div class="produ-cost">
	    			<h4>'.$name.'</h4>
	    			<h5>'.$price.'</h5>
	    		</div>
    		</div>
    	</div>';

$count=$count+1;
if($count==4)
{

	echo "<tr>";
	$count=0;
}


}

mysqli_close($con);

?>