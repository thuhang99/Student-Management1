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
    <h7 class="m-0 font-weight-bold text-primary">Thông tin sinh viên
            <a style="float:right" href="add_student.php">
              Thêm mới sinh viên
            </a>
    </h7>
  </div>

  <div class="card-body">
  <div class="table-responsive">
<?php 
          
          if(isset($_SESSION['success'])&& $_SESSION['success'] !='')
          {
            echo '<p class="alert alert-success" role="alert">'.$_SESSION['success'].'</p>';
            unset($_SESSION['success']);
          }
          if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
          {
            echo '<p class="alert alert-danger" role="alert">'.$_SESSION['status'].'</p>';
            unset($_SESSION['status']);
          }
 ?>
    
<?php 
// $query="SELECT * FROM student";
// $query_run=mysqli_query($connect,$query);
$query="SELECT class.tenlop,student.id, name, code,class , phone,email,id_pos FROM student INNER JOIN class ON class.id = student.class";
$query_run=mysqli_query($connect,$query);

 ?>
                  <br>
                  <div class="input-group col-md-4 ">
                    <input type="text" id="myInput" class="form-control bg-light border-0 small" placeholder="Tìm kiếm sinh viên" aria-label="Search" aria-describedby="basic-addon2" name="hoten" onkeyup="myFunction()">
                    <div div class="input-group-append">
                      <button class="btn btn-primary" type="button" name="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                    </div>
                  </div>
                  <br>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Mã SV</th>
            <th>Lớp</th>
            <th>Điện thoại</th>
            <th>Email</th>
            <th>Chức vụ</th>
            <th>Sửa</th>
            <th>Xóa</th>
          </tr>
        </thead>
        <tbody>
          <?php 
              $no = 1;
              if(mysqli_num_rows($query_run)>0)
              {
                while($row=mysqli_fetch_assoc($query_run))
                {                 
                  ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['tenlop']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                          <?php 
                            if($row['id_pos']==1)
                            {
                              echo '<a href="#" class="badge badge-danger">Lớp trưởng</a>';
                              
                            }
                            if($row['id_pos']==2)
                            {
                              echo '<a href="#" class="badge badge-success">Bí thư</a>';
                            }
                            if($row['id_pos']==3)
                            {
                              echo '<a  href="#" class="badge badge-primary">Lớp phó</a>';
                            }
                            else
                            {
                              echo ' ';
                            }
                          ?>
                        </td>
                        <td>
                            <form action="edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button  type="submit" name="edit_btn" class="btn btn-info btn-circle"><i class="fa fa-edit edit"></i></button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="post">
                              <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                              <button onclick="return confirm('Bạn có muốn xóa sinh viên')" href="code.php?id=<?php echo $row['name'];?>" type="submit" name="delete_btn" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                      </tr>
                  <?php
                  $no++;
                }
              }
              else
              {
                echo "Not found";
              }
           ?>
        
        </tbody>
      </table>
     
    </div>
  </div>
</div>

</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<?php
include('includes/scripts.php');
?>