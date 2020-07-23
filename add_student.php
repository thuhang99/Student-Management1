<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/connect.php');
?>

<!-- <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Họ Tên</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Mã SV</label>
                <input type="number" name="code" class="form-control" placeholder="Enter Code">
            </div>
            <div class="form-group">
                <label>Lớp</label>
                <input type="text" name="class" class="form-control" placeholder="Enter Class">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="tel" name="phone" class="form-control" placeholder="Enter Phone">
            </div>
            <div class="form-group">
                <label>Điểm 1</label>
                <input type="number" name="diem1" class="form-control" placeholder="Nhập vào điểm 1">
            </div>
            <div class="form-group">
                <label>Điểm 2</label>
                <input type="number" name="diem2" class="form-control" placeholder="Nhập vào điểm 2">
            </div>
            <div class="form-group">
                <label>Điểm 3</label>
                <input type="number" name="diem3" class="form-control" placeholder="Nhập vào điểm 3">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="registerbtn" class="btn btn-primary">Lưu</button>
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
        </div>
      </form>

    </div>
  </div>
</div>

<?php
include('includes/scripts.php');
// include('includes/footer.php');
?>