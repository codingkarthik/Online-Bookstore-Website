
<?php

session_start();

$con=mysqli_connect("localhost","root","","mera1");

if(!$con)
{
	die("Could not connect to".mysqli_errno($con));
}
else
{
	
    $result=mysqli_query($con,"SELECT book_quantity FROM book WHERE book_name='Goliath'");
//	$row = $result->fetch_assoc();
	$row = mysql_fetch_object($result);
//	echo "id: " . $row["book_quantity"];
	if($row==0)
	{
		echo "Out of Stock";
	
	}
	else
	{
		echo "Available";
	}
}
session_destroy();		
?>