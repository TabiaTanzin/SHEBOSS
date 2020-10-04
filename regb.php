<?php

session_start();

$link = mysqli_connect("localhost", "root", "", "registration");

if(isset($_POST['signup']))
{
	$name =$_POST['name'];
	$email= $_POST['email'];
	$btype=$_POST['btype'];
	$web = $_POST['web'];
	$MB=$_POST['MB'];
	$Address=$_POST['Address'];
	
	
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
	if($btype=='')
	{
		echo "<script>alert('Please enter the type')</script>";
		exit();
	}
	
	else{
	$q ="insert into regb (name,email,btype,web,MB,Address) values ('$name','$email','$btype' ,'$web' ,'$MB' ,'$Address')";
	$r= mysqli_query($link,$q);
	if($r)
	{
		header('location:home.php');
	}
	}
	
	
	
}
	

?>
