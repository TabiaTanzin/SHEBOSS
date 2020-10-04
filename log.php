<?php

session_start();

$link = mysqli_connect("localhost", "root", "", "registration");

if(isset($_POST['signin']))
{
	$name =$_POST['name'];
	
	$pass=$_POST['password'];
	
	$s="select * from reg where name = '$name' && password ='$pass'";
		
	$r= mysqli_query($link,$s);
	$num=mysqli_num_rows($r);
	
	if($num==1)
	{
		header('location:home.php');
	}
	else
	{
		
		header('location:log2.php');
		
	}
	
	
	
}
	

?>
