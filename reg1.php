<?php

session_start();

$link = mysqli_connect("localhost", "root", "", "registration");

if(isset($_POST['signup']))
{
	$name =$_POST['name'];
	$email= $_POST['email'];
	$pass=$_POST['password'];
	if($name=='')
	{
		echo "<script>alert('Please enter the name')</script>";
		exit();
	}
	
	if($email=='')
	{
		echo "<script>alert('Please enter the email')</script>";
		exit();
	}
	if($pass=='')
	{
		echo "<script>alert('Please enter the password')</script>";
		exit();
	}
	else{
	$q ="insert into reg (name,email,password) values ('$name','$email','$pass')";
	$r= mysqli_query($link,$q);
	if($r)
	{
		header('location:home.php');
	}
	}
	
	
	
}
	

?>
