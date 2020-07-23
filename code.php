<?php 
session_start();
include('includes/connect.php');
//Login
// if(isset($_POST['login_btn']))
// {
// 	$email=$_POST['email'];
// 	$password=$_POST['password'];

// 	$query="SELECT id,email,password FROM admin WHERE emai='{$email}' AND password='{$password}'";
	
// 	$query_run=mysqli_query($connect,$query);

// 	if(mysqli_fetch_array($query_run)==1)
	
// 	{
// 		$_SESSION['email']=$email;
// 		header('Location:index.php');
// 	}
// 	else
// 	{
// 		$_SESSION['status']='Sai thông tin đăng nhập';
// 		header('Location:login.php');
// 	}

// }


if(isset($_POST['registerbtn']))
{

	$name=$_POST['name'];
	$code=$_POST['code'];
	$class=$_POST['class'];
	$phone=$_POST['phone'];
	// $d1=$_POST['d1'];
	// $d2=$_POST['d2'];
	// $d3=$_POST['d3'];
	//$tbc=($d1+$d2+$d3)/3;

	$query = "INSERT INTO student(name, code, class, phone) VALUES ('$name','$code','$class','$phone')";
	//$query2 = "INSERT INTO bangdiem(d1,d2,d3, tbc) VALUES ('$d1','$d2','$d3', '$tbc')";
	$query_run = mysqli_query($connect,$query);
	if($query_run)
	{
				//$query_run2 = mysqli_query($connect,$query2);
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

	//giong ơ trên
	$query="UPDATE student SET name='$name',code='$code',class='$class',phone='$phone' WHERE id='$id' ";
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
	$query="DELETE FROM student WHERE id='$id'";
	$query_run=mysqli_query($connect,$query);

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
//Lớp--------------------------------------------------------------------
	if(isset($_POST['addclass']))
	{
	
		$class=$_POST['class'];
		$chuyennganh=$_POST['ten_cn'];
		$gvcn=$_POST['gvcn'];
		
	
		$query1 = "INSERT INTO class(tenlop, ten_cn, gvcn) VALUES ('$class','$chuyennganh','$gvcn')";
	
		$query_run1 = mysqli_query($connect,$query1);
		if($query_run1)
		{
					// $_SESSION['success']="Success";
					header('Location:class.php');
	
		}
		else
		{
			// $_SESSION['status']="Fail";
			header('Location:class.php');
		}
	}
	
	if(isset($_POST['update-class']))
	{
		
		$id=$_POST['edit_id'];
		$tenlop=$_POST['edit_tenlop'];
		$ten_cn=$_POST['edit_chuyennganh'];
		$gvcn=$_POST['edit_gvcn'];
	
		
		$query="UPDATE class SET tenlop='$tenlop',ten_cn='$ten_cn',gvcn='$gvcn' WHERE id='$id' ";
		$query_run=mysqli_query($connect,$query);
		if($query_run)
		{
			$_SESSION['success']="Success";
			header('Location:class.php');
		}
		else
		{
			$_SESSION['status']="Fail";
			header('Location:class.php');
		}
	}
			if(isset($_POST['delete_class']))
		{

			$id=$_POST['delete_id'];
			$query="DELETE FROM class WHERE id='$id'";
			$query_run=mysqli_query($connect,$query);
		
			if($query_run)
			{
				$_SESSION['success']="Success";
				header('Location:class.php');

			}
			else
			{
				$_SESSION['status']="Fail";
				header('Location:class.php');
			}
		}	
 ?>

