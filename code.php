<?php 
session_start();
include('includes/connect.php');

// thêm mới sinh viên

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
	$namep=$_POST['namep'];
	$addp=$_POST['addp'];
	$phonep=$_POST['phonep'];
	$emailp=$_POST['emailp'];

	$query = "INSERT INTO student(name, code, class, phone, email, id_pos) VALUES ('$name','$code','$class','$phone','$email','$id_pos')";
	$query_run = mysqli_query($connect,$query);

	$id_sv=mysqli_insert_id($connect);
	$query2 = "INSERT INTO points (id_sv,diem1,diem2,diem3,tbc) VALUES ('$id_sv','$diem1','$diem2','$diem3', '$tbc')";
	$query_run2 = mysqli_query($connect,$query2);

	$query3 = "INSERT INTO parents (id_sv,namep,addp,phonep,emailp) VALUES ('$id_sv','$namep','$addp','$phonep', '$emailp')";
	$query_run3 = mysqli_query($connect,$query3);

	if($query_run)
	{
				$_SESSION['success'].="Thêm mới sinh viên thành công";
				header('Location:student.php');

	}
	else
	{
		$_SESSION['status'].="Thêm mới sinh viên không thành công";
		header('Location:student.php');
	}
}


// sửa thông tin sinh viên

if(isset($_POST['update-btn']))
{
	$id=$_POST['edit_id'];
	$name=$_POST['edit_name'];
	$code=$_POST['edit_code'];
	$class=$_POST['edit_class'];
	$phone=$_POST['edit_phone'];
	$email=$_POST['edit_email'];
	$id_pos=$_POST['edit_id_pos'];

	$query="UPDATE student SET name='$name',code='$code',class='$class',phone='$phone',email='$email',id_pos='$id_pos' WHERE id='$id' ";
	$query_run=mysqli_query($connect,$query);
	if($query_run)
	{
		$_SESSION['success'].="Thay đổi thông tin sinh viên thành công";
		header('Location:student.php');
	}
	else
	{
		$_SESSION['status'].="Thay đổi thông tin sinh viên không thành công";
		header('Location: edit.php');
	}
}

//xóa sinh viên

if(isset($_POST['delete_btn']))
{

	$id=$_POST['delete_id'];
	$query="DELETE FROM student WHERE id='$id'";
	$query_run=mysqli_query($connect,$query);

	if($query)
	{
		$query2="DELETE FROM points WHERE id_sv='$id'";
		$query_run2=mysqli_query($connect,$query2);
		$query3="DELETE FROM parents WHERE id_sv='$id'";
		$query_run3=mysqli_query($connect,$query3);
	}

if($query_run)
	{
		$_SESSION['success'].="Xóa sinh viên thành công";
		header('Location:student.php');

	}
	else
	{
		$_SESSION['status'].="Xóa sinh viên thành công";
		header('Location:student.php');
	}
}



//Lớp--------------------------------------------------------------------

//Thêm mới lớp

	if(isset($_POST['addclass']))
	{
	
		$class=$_POST['class'];
		$id_cn=$_POST['id_cn'];
		$gvcn=$_POST['gvcn'];
		
	
		$query1 = "INSERT INTO class(tenlop, id_cn, gvcn) VALUES ('$class','$id_cn','$gvcn')";
	
		$query_run1 = mysqli_query($connect,$query1);
		if($query_run1)
		{
					$_SESSION['success'].="Thêm mới lớp thành công";
					header('Location:class.php');
	
		}
		else
		{
			$_SESSION['status'].="Thêm mới lớp không thành công";
			header('Location:class.php');
		}
	}
	

//Sửa thông tin lớp

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
			$_SESSION['success'].="Sửa thông tin lớp thành công";
			header('Location:class.php');
		}
		else
		{
			$_SESSION['status'].="Sửa thông tin lớp không thành công";
			header('Location:class.php');
		}
	}


// Xóa lớp
			if(isset($_POST['delete_class']))
		{

			$id=$_POST['delete_id'];
			$query="DELETE FROM class WHERE id='$id'";
			$query_run=mysqli_query($connect,$query);
		
			if($query_run)
			{
				$_SESSION['success'].="Xóa lớp thành công";
				header('Location:class.php');

			}
			else
			{
				$_SESSION['status'].="Xóa lớp không thành công";
				header('Location:class.php');
			}
		}	




//Điểm----------------------------------------------

//Sửa điểm

if(isset($_POST['update-point']))
	{
		
		$id=$_POST['edit_id'];
		$diem1=$_POST['edit_diem1'];
		$diem2=$_POST['edit_diem2'];
		$diem3=$_POST['edit_diem3'];
		$tbc=($diem1+$diem2+$diem3)/3;

		$query="UPDATE points SET diem1='$diem1',diem2='$diem2',diem3='$diem3',tbc='$tbc' WHERE id='$id' ";
		$query_run=mysqli_query($connect,$query);
		if($query_run)
		{
			$_SESSION['success'].="Sửa điểm thành công";
			header('Location:point.php');
		}
		else
		{
			$_SESSION['status'].="Sửa điểm không thành công";
			header('Location:point.php');
		}
	}



	//Phụ huynh-------------------------------------------------------

	//Sửa phụ huynh
	if(isset($_POST['update-parent']))
	{
		
		$id=$_POST['edit_id'];
		$namep=$_POST['edit_namep'];
		$addp=$_POST['edit_addp'];
		$phonep=$_POST['edit_phonep'];
		$emailp=$_POST['edit_emailp'];

		$query="UPDATE parents SET namep='$namep',addp='$addp',phonep='$phonep',emailp='$emailp' WHERE id='$id' ";
		$query_run=mysqli_query($connect,$query);
		if($query_run)
		{
			$_SESSION['success'].="Sửa thông tin phụ huynh thành công";
			header('Location:parent.php');
		}
		else
		{
			$_SESSION['status'].="Sửa thông tin phụ huynh không thành công";
			header('Location:parent.php');
		}
	}
 ?>

