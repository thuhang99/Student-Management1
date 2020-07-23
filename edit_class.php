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
    <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa thông tin lớp
    </h6>
  </div>
  <div class="card-body">
  	 <div class="modal-body">
  	<?php 

			if(isset($_POST['edit_class']))
			{
				$id=$_POST['edit_id'];
				$query="SELECT * FROM class WHERE id='$id'";
				$query_run=mysqli_query($connect,$query);
				
				foreach ($query_run as $row)
				{
					?>

				
 	          <form action="code.php" method="post">
              <input type="hidden" name="edit_id" class="form-control" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label>Tên lớp</label>
                        <input type="text" name="edit_tenlop" class="form-control" placeholder="Nhập vào tên lớp" value="<?php echo $row['tenlop']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Chuyên ngành</label>
                        <input type="text" name="edit_chuyennganh" class="form-control" placeholder="Nhập vào tên chuyên ngành" value="<?php echo $row['ten_cn']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Giáo viên chủ nhiệm</label>
                        <input type="text" name="edit_gvcn" class="form-control" placeholder="Nhập vào tên giáo viên" value="<?php echo $row['gvcn']; ?>">
                    </div>
                    
                    <!-- <button type="button" class="btn btn-primary" name="update-btn">Save</button> -->
                    <input type="submit" name="update-class" class="btn btn-primary" value="Lưu lại">
                    <a href="class.php" class="btn btn-danger">Thoát</a>
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