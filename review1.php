<?php

session_start();

$link = mysqli_connect("localhost", "root", "", "registration");

if(isset($_POST['sub']))
{
	$uname = $_POST['uname'];
	$cname = $_POST['cname'];
	$rate =$_POST['rate'];
	$com = $_POST['com'];
	
	$q ="insert into review (uname,cname,rate,com) values ('$uname','$cname','$rate','$com')";
	$r= mysqli_query($link,$q);
	if($r)
	{
		echo "submitted";
		header('location:review.php');
	}
	
	
	
	
}
	

?>
