<?php

session_start();

$con=mysqli_connect("localhost","root","","mera1");

if(!$con)
{
	die("Could not connect to".mysqli_errno($con));
}
else
{
	$name=$_POST["name"];
	$mobile=$_POST["mobile"];
	$comments=$_POST["comments"];
	$email=$_POST["email"];
	$sql="INSERT INTO contact_us(name,mobile,comments,email)VALUES('$name','$mobile','$comments','$email')";
	if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn>error;
}
}

?>