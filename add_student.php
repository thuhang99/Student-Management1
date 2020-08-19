<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/connect.php');

$query="SELECT * FROM class";
$query_run=mysqli_query($connect,$query);

$results_array = array();

while($row = mysqli_fetch_assoc($query_run)) {
    array_push($results_array, $row);
}
?>
  <div class="container-fluid">
  <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h7 class="m-0 font-weight-bold text-primary">Thêm mới sinh viên</h7>
  </div>
  <div class="card-body">
  <p class="mt-3 mb-n1 pl-2" style="font-size: 16px;"> Các thông tin <span class="batbuoc">(*)</span> là bắt buộc </p>
      <form action="code.php" method="POST">

        <div class="modal-body">
          <div>
          <h7 class="m-0 font-weight-bold text-primary">Thông tin sinh viên</h7>
          <div class="row">
          <div class="form-group col-md-6">
                <label> Họ Tên <span class="batbuoc">*</span></label>
                <input type="text" name="name" class="form-control" placeholder="Nhập vào tên" required>
            </div>
            <div class="form-group col-md-6">
                <label>Mã SV<span class="batbuoc">*</span></label>
                <input type="text" name="code" class="form-control" placeholder="Nhập vào MSV" required>
            </div>
          </div> 
          <div class="row">
          <div class="form-group col-md-6">
                <label>Lớp<span class="batbuoc">*</span></label>
                <select name="class" class=" form-control">
                <?php foreach($results_array as $key){ ?>
                <option value="<?php echo $key['id']; ?>"><?php echo $key['tenlop'] ?> </option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Chức vụ</label>
                <select name="id_pos" class=" form-control">
                  <option>Chọn chức vụ</option>
                  <option value="1">Lớp trưởng</option>
                  <option value="2">Bí thư</option>
                  <option value="3">Lớp phó</option>
                </select>
                <!-- <input type="text" name="id_pos" class="form-control" placeholder="Nhập vào chức vụ"> -->
            </div>
          </div>
          
          <div class="row">
          <div class="form-group col-md-6">
                <label>Số điện thoại<span class="batbuoc">*</span></label>
                <input type="tel" name="phone" class="form-control" placeholder="Nhập vào SĐT" required>
            </div>
            <div class="form-group col-md-6">
                <label>Email<span class="batbuoc">*</span></label>
                <input type="email" name="email" class="form-control" placeholder="Nhập vào email" required>
            </div>
          </div>
        </div>  


          <div>
          <h7 class="m-0 font-weight-bold text-primary">Thông tin phụ huynh</h7>
          <div class="row">
          <div class="form-group col-md-6">
                <label>Họ Tên<span class="batbuoc">*</span></label>
                <input type="text" name="namep" class="form-control" placeholder="Nhập vào tên" required>
            </div>
            <div class="form-group col-md-6">
                <label>Địa chỉ<span class="batbuoc">*</span></label>
                <input type="text" name="addp" class="form-control" placeholder="Nhập vào địa chỉ" required>
            </div>
          </div> 
          </div>
          <div class="row">
          <div class="form-group col-md-6">
                <label>Số điện thoại<span class="batbuoc">*</span></label>
                <input type="tel" name="phonep" class="form-control" placeholder="Nhập vào số điện thoại" required>
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
                <label>Điểm chuyên cần<span class="batbuoc">*</span></label>
                <input type="number" name="diem1" class="form-control" placeholder="Nhập vào điểm 1" required>
            </div>
            <div class="form-grou col-md-4">
                <label>Điểm giữa kỳ<span class="batbuoc">*</span></label>
                <input type="number" name="diem2" class="form-control" placeholder="Nhập vào điểm 2" required>
            </div>
            <div class="form-group col-md-4">
                <label>Điểm cuối kỳ<span class="batbuoc">*</span></label>
                <input type="number" name="diem3" class="form-control" placeholder="Nhập vào điểm 3" required>
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