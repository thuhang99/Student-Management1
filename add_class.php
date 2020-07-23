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
                <label><strong>Tên lớp</strong></label>
                <input type="text" name="class" class="form-control" placeholder="Nhập vào tên lớp">
            </div>
            <div class="form-group">
                <label><strong>Chuyên ngành</strong></label>
                <input type="text" name="chuyennganh" class="form-control" placeholder="Nhập vào tên chuyên ngành">
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