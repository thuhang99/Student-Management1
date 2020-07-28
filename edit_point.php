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
    <h7 class="m-0 font-weight-bold text-primary">Chỉnh sửa bảng điểm
    </h7>
  </div>
  <div class="card-body">
  	 <div class="modal-body">
  	<?php 

			if(isset($_POST['edit_point']))
			{
				$id=$_POST['edit_id'];
                $query="SELECT * FROM points WHERE id='$id'";
                //$query="SELECT student.name, code, diem1, diem2, diem3, tbc FROM student INNER JOIN point ON student.id = point.id_sv WHERE id='$id'";
				$query_run=mysqli_query($connect,$query);
				
				foreach ($query_run as $row)
				{
					?>

				
 	          <form action="code.php" method="post">
              <input type="hidden" name="edit_id" class="form-control" value="<?php echo $row['id']; ?>">                  
                    <div class="form-group">
                        <label>Điểm 1</label>
                        <input type="number" name="edit_diem1" class="form-control" placeholder="Nhập vào điểm 1" value="<?php echo $row['diem1']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Điểm 2</label>
                        <input type="number" name="edit_diem2" class="form-control" placeholder="Nhập vào điểm 2" value="<?php echo $row['diem2']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Điểm 3</label>
                        <input type="number" name="edit_diem3" class="form-control" placeholder="Nhập vào điểm 3" value="<?php echo $row['diem3']; ?>">
                    </div>
                    <!-- <button type="button" class="btn btn-primary" name="update-btn">Save</button> -->
                    <input type="submit" name="update-point" class="btn btn-primary" value="Lưu lại">
                    <a href="point.php" class="btn btn-danger">Thoát</a>
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