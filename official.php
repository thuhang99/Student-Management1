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
    <h7 class="m-0 font-weight-bold text-primary">Danh sách cán bộ lớp</h7>
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
$query="SELECT class.tenlop,student.id, name, code,class , phone,email,id_pos FROM student INNER JOIN class ON class.id = student.class";
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

                

              if(mysqli_num_rows($query_run)>0)
              {
                while($row=mysqli_fetch_assoc($query_run))
                {
                  
                  ?>
                <?php 
                    if($row['id_pos']!=0)
                    {
                ?>
                      <tr>
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
                         }
                    ?>
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