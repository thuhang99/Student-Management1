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
				$_SESSION['success']="Success";
				header('Location:student.php');

	}
	else
	{
		$_SESSION['status']="Fail";
		header('Location:student.php');
	}
}


if(isset($_POST['update-btn']))
{
	$id=$_POST['edit_id'];
	$name=$_POST['edit_name'];
	$code=$_POST['edit_code'];
	$class=$_POST['edit_class'];
	$phone=$_POST['edit_phone'];

	$query="UPDATE sinhvien SET name='$name',code='$code',class='$class',phone='$phone' WHERE id='$id' ";
	$query_run=mysqli_query($connect,$query);
	if($query_run)
	{
		$_SESSION['success']="Success";
		header('Location:student.php');
	}
	else
	{
		$_SESSION['status']="Fail";
		header('Location: edit.php');
	}
}


if(isset($_POST['delete_btn']))
{

	$id=$_POST['delete_id'];
	$query="DELETE FROM sinhvien WHERE id='$id'";
	$query_run=mysqli_query($connect,$query);
}
if($query_run)
	{
		$_SESSION['success']="Success";
		header('Location:student.php');

	}
	else
	{
		$_SESSION['status']="Fail";
		header('Location:student.php');
	}

 ?>


