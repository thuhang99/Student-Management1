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
    <h7 class="m-0 font-weight-bold text-primary">Thêm mới sinh viên</h7>
  </div>
  <div class="card-body">
      <form action="code.php" method="POST">

        <div class="modal-body">
          <div>
          <h7 class="m-0 font-weight-bold text-primary">Thông tin sinh viên</h7>
          <div class="row">
          <div class="form-group col-md-6">
                <label> Họ Tên</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập vào tên">
            </div>
            <div class="form-group col-md-6">
                <label>Mã SV</label>
                <input type="text" name="code" class="form-control" placeholder="Nhập vào MSV">
            </div>
          </div> 

          <!-- end row -->

          <div class="row">
          <div class="form-group col-md-6">
                <label>Lớp</label>
                <input type="text" name="class" class="form-control" placeholder="Nhập vào lớp">
            </div>
            <div class="form-group col-md-6">
                <label>Chức vụ</label>
                <select name="id_pos" class=" form-control">
                  <option value="0"> </option>
                  <option value="1">Lớp trưởng</option>
                  <option value="2">Bí thư</option>
                  <option value="3">Lớp phó</option>
                </select>
                <!-- <input type="text" name="id_pos" class="form-control" placeholder="Nhập vào chức vụ"> -->
            </div>
          </div>
          
          <div class="row">
          <div class="form-group col-md-6">
                <label>Số điện thoại</label>
                <input type="tel" name="phone" class="form-control" placeholder="Nhập vào SĐT">
            </div>
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Nhập vào email">
            </div>
          </div>
        </div>  


          <div>
          <h7 class="m-0 font-weight-bold text-primary">Thông tin phụ huynh</h7>
          <div class="row">
          <div class="form-group col-md-6">
                <label>Họ Tên</label>
                <input type="text" name="namep" class="form-control" placeholder="Nhập vào tên">
            </div>
            <div class="form-group col-md-6">
                <label>Địa chỉ</label>
                <input type="text" name="addp" class="form-control" placeholder="Nhập vào địa chỉ">
            </div>
          </div> 
          </div>
          <div class="row">
          <div class="form-group col-md-6">
                <label>Số điện thoại</label>
                <input type="tel" name="phonep" class="form-control" placeholder="Nhập vào số điện thoại">
            </div>
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" name="emailp" class="form-control" placeholder="Nhập vào email">
            </div>
          </div> 
          

          <div>
          <h7 class="m-0 font-weight-bold text-primary">Điểm sinh viên</h7>
           <div class="row">
           <div class="form-group col-md-4">
                <label>Điểm 1</label>
                <input type="number" name="diem1" class="form-control" placeholder="Nhập vào điểm 1">
            </div>
            <div class="form-grou col-md-4">
                <label>Điểm 2</label>
                <input type="number" name="diem2" class="form-control" placeholder="Nhập vào điểm 2">
            </div>
            <div class="form-group col-md-4">
                <label>Điểm 3</label>
                <input type="number" name="diem3" class="form-control" placeholder="Nhập vào điểm 3">
            </div>
        </div>
        </div>
           </div>
           </div>   
        <div class="modal-footer">
            <button type="submit" name="registerbtn" class="btn btn-primary">Lưu</button>
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
        </div>
      </form>
      </div>
      </div>

<?php
include('includes/scripts.php');
// include('includes/footer.php');
?>