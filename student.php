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
    <h6 class="m-0 font-weight-bold text-primary">Thông tin sinh viên
            <a style="float:right" href="add_student.php">
              Thêm mới sinh viên
            </a>
    </h6>
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
$query="SELECT * FROM student";
$query_run=mysqli_query($connect,$query);


 ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <!-- <th> ID </th> -->
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

                  // $query_page = "SELECT COUNT(id) AS total FROM student";
                  // $result_page = mysqli_query($connect,$query_page);
                  // // ktra_query($result_page,$query_page);
                  // $query_run=mysqli_query($result_page,$query);
                  // $row = mysqli_fetch_assoc($result_page);
                  // $total_records = $row['total'];
                  // // tim limlit va current_page
                  // $current_page = isset($_GET['page']) ? $_GET['page']:1;
                  // $limit = 10;
                  // //tong so trang
                  // $total_page = ceil($total_records/$limit);
                  // // gioi han current_page trong khoang 1 den total_page
                  // if ($current_page > $total_page) {
                  //   $current_page = $total_page;
                  // }else if($current_page < 1){
                  //   $current_page = 1;
                  // }
                  // // tim start
                  // $start = ($current_page -1)*$limit;

                  // $query2 = "SELECT * FROM student ORDER BY id  LIMIT {$start},{$limit}";
                  // $result2 = mysqli_query($connect,$query2);
                  // //ktra_query($result,$query);
                  // $query_run=mysqli_query($result2,$query2);

              if(mysqli_num_rows($query_run)>0)
              {
                while($row=mysqli_fetch_assoc($query_run))
                {
                  
                  ?>

                      <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['class']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td>test@gmail.com</td>
                        <td>Lớp trưởng</td>
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
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>