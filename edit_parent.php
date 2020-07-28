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
    <h7 class="m-0 font-weight-bold text-primary">Chỉnh sửa thông tin phụ huynh
    </h7>
  </div>
  <div class="card-body">
  	 <div class="modal-body">
  	<?php 

			if(isset($_POST['edit_parent']))
			{
				$id=$_POST['edit_id'];
                $query="SELECT * FROM parents WHERE id='$id'";
				$query_run=mysqli_query($connect,$query);
				
				foreach ($query_run as $row)
				{
					?>

				
 	          <form action="code.php" method="post">
              <input type="hidden" name="edit_id" class="form-control" value="<?php echo $row['id']; ?>">                  
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="edit_namep" class="form-control" placeholder="Nhập vào tên" value="<?php echo $row['namep']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" name="edit_addp" class="form-control" placeholder="Nhập vào địa chỉ" value="<?php echo $row['addp']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="tel" name="edit_phonep" class="form-control" placeholder="Nhập vào số điện thoại" value="<?php echo $row['phonep']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="edit_emailp" class="form-control" placeholder="Nhập vào email" value="<?php echo $row['emailp']; ?>">
                    </div>
                    <!-- <button type="button" class="btn btn-primary" name="update-btn">Save</button> -->
                    <input type="submit" name="update-parent" class="btn btn-primary" value="Lưu lại">
                    <a href="parent.php" class="btn btn-danger">Thoát</a>
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