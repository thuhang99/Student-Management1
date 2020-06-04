<?php 
session_start();
include('connect.php');
if(isset($_POST['registerbtn']))
{

	$name=$_POST['name'];
	$code=$_POST['code'];
	$class=$_POST['class'];
	$phone=$_POST['phone'];

	$query = "INSERT INTO sinhvien(name, code, class, phone) VALUES ('$name','$code','$class','$phone')";
	$query_run = mysqli_query($connect,$query);
	if($query_run)
	{
				$_SESSION['success']="Admin Profile Added";
				header('Location:student.php');

	}
	else
	{
		$_SESSION['status']="Admin Profile NOT Added";
		header('Location:student.php');
	}
}


 ?>


