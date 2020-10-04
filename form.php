<?php

session_start();



if(isset($_POST['save']))
{
	$n1 =$_POST['category1'];
	$n2 =$_POST['category2'];
	$n3 =$_POST['category3'];
	$n4 =$_POST['category4'];
	$n5 =$_POST['category5'];
	$n6 =$_POST['category6'];
	$n7 =$_POST['category7'];
	$n8 =$_POST['category8'];
	
	
	if($n!='')
	{
		header('location:food.html');
	}
	
	
	
	
	
}
	

?>
