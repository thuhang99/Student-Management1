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
      <div class="container-fluid">
  <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h7 class="m-0 font-weight-bold text-primary">Thêm mới lớp
          
    </h7>
  </div>
    <div class="card-body">
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label><strong>Tên lớp</strong></label>
                <input type="text" name="class" class="form-control" placeholder="Nhập vào tên lớp">
            </div>
            <div class="form-group">
                <!-- <label><strong>Chuyên ngành</strong></label>
                <input type="text" name="chuyennganh" class="form-control" placeholder="Nhập vào tên chuyên ngành"> -->
                <div class="form-group ">
                <label>Chuyên ngành</label>
                <select name="id_cn" class=" form-control">
                  <option value="0"></option>
                  <option value="1">Công nghệ phần mềm</option>
                  <option value="2">Công nghệ thông tin</option>
                  <option value="3">Hệ thống thông tin</option>
                  <option value="4">An toàn thông tin</option>
                  <option value="5">Mạng máy tính và truyền thông dữ liệu</option>
                </select>
                <!-- <input type="text" name="id_pos" class="form-control" placeholder="Nhập vào chức vụ"> -->
            </div>
            </div>
            <div class="form-group">
                <label><strong>Giáo viên chủ nhiệm</strong></label>
                <input type="text" name="gvcn" class="form-control" placeholder="Nhập vào tên giáo viên">
            </div>
            
        <div class="modal-footer">
            <button type="submit" name="addclass" class="btn btn-info">Lưu</button>
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
        </div>
      </form>

    </div>
  </div>
</div>

<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>