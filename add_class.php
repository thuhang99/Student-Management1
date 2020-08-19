<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php');

include('includes/connect.php');
?>
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h7 class="m-0 font-weight-bold text-primary">Thêm mới lớp</h7>
    </div>

    <div class="card-body">
      <form action="code.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label><strong>Tên lớp<span class="batbuoc">*</span></strong></label>
                <input type="text" name="class" class="form-control" placeholder="Nhập vào tên lớp">
            </div>
            <div class="form-group">              
                <div class="form-group ">
                <label>Chuyên ngành<span class="batbuoc">*</span></label>
                <select name="id_cn" class=" form-control">
                  <option >Chọn chuyên ngành</option>
                  <option value="1">Công nghệ phần mềm</option>
                  <option value="2">Công nghệ thông tin</option>
                  <option value="3">Hệ thống thông tin</option>
                  <option value="4">An toàn thông tin</option>
                  <option value="5">Mạng máy tính và truyền thông dữ liệu</option>
                </select>
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
?>