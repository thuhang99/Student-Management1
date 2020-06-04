<?php 
$connect=mysqli_connect('localhost','root','','db_qlsinhvien1');
	if (!$connect) {
		echo "ket noi k thanh cong";
	}
	else{
		// echo"Kết nối CSDL thành công";
		mysqli_set_charset($connect,'utf8');
	}
 ?>