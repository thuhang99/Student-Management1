<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/connect.php');
?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa thông tin sinh viên 
    </h6>
  </div>
  <div class="card-body">
  	 <div class="modal-body">
  	<?php 

			if(isset($_POST['edit_btn']))
			{
				$id=$_POST['edit_id'];
				$query="SELECT * FROM student WHERE id='$id'";
				$query_run=mysqli_query($connect,$query);
				
				foreach ($query_run as $row)
				{
					?>

				
 	          <form action="code.php" method="post">
              <input type="hidden" name="edit_id" class="form-control" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label>Họ Tên</label>
                        <input type="text" name="edit_name" class="form-control" placeholder="Nhập vào Họ Tên" value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Mã SV</label>
                        <input type="text" name="edit_code" class="form-control" placeholder="Nhập vào MSV" value="<?php echo $row['code']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Lớp</label>
                        <input type="text" name="edit_class" class="form-control" placeholder="Nhập vào lớp" value="<?php echo $row['class']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="tel" name="edit_phone" class="form-control" placeholder="Nhập vào số điện thoại" value="<?php echo $row['phone']; ?>">
                    </div>
                    <!-- <button type="button" class="btn btn-primary" name="update-btn">Save</button> -->
                    <input type="submit" name="update-btn" class="btn btn-primary" value="Lưu lại">
                    <a href="student.php" class="btn btn-danger">Thoát</a>
            </form>
        	<?php
				}
			}
  	 ?>
        </div>
    </div>
  </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>