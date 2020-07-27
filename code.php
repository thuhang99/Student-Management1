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
	$email=$_POST['email'];
	$id_pos=$_POST['id_pos'];
	$diem1=$_POST['diem1'];
	$diem2=$_POST['diem2'];
	$diem3=$_POST['diem3'];
	$tbc=($diem1+$diem2+$diem3)/3;

	$query = "INSERT INTO student(name, code, class, phone, email, id_pos) VALUES ('$name','$code','$class','$phone','$email','$id_pos')";
	
	// var_dump($query);
	// die();
	
	
	$query_run = mysqli_query($connect,$query);
	$id_sv=mysqli_insert_id($connect);
	$query2 = "INSERT INTO point (id_sv,diem1,diem2,diem3,tbc) VALUES ('$id_sv','$diem1','$diem2','$diem3', '$tbc')";
	$query_run2 = mysqli_query($connect,$query2);
	$query_3="SELECT name, code, diem1, diem1, diem2, tbc FROM student INNER JOIN point on student.id = point.id_sv";
	$query_run3=mysqli_query($connect,$query3);
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
	$email=$_POST['edit_email'];
	$id_pos=$_POST['edit_id_pos'];

	//giong ơ trên
	$query="UPDATE student SET name='$name',code='$code',class='$class',phone='$phone',email='$email',id_pos='$id_pos' WHERE id='$id' ";
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
		$id_cn=$_POST['id_cn'];
		$gvcn=$_POST['gvcn'];
		
	
		$query1 = "INSERT INTO class(tenlop, id_cn, gvcn) VALUES ('$class','$id_cn','$gvcn')";
	
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
		$id_cn=$_POST['edit_id_cn'];
		$gvcn=$_POST['edit_gvcn'];
	
		
		$query="UPDATE class SET tenlop='$tenlop',id_cn='$id_cn',gvcn='$gvcn' WHERE id='$id' ";
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




//Điểm----------------------------------------------	
if(isset($_POST['update-point']))
	{
		
		$id=$_POST['edit_id'];
		$diem1=$_POST['edit_diem1'];
		$diem2=$_POST['edit_diem2'];
		$diem3=$_POST['edit_diem3'];

		$query="UPDATE point SET diem1='$diem1',diem2='$diem2',diem3='$diem3' WHERE id='$id' ";
		$query_run=mysqli_query($connect,$query);
		if($query_run)
		{
			$_SESSION['success']="Success";
			header('Location:point.php');
		}
		else
		{
			$_SESSION['status']="Fail";
			header('Location:point.php');
		}
	}
 ?>

