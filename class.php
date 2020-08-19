<?php
  session_start();
  include('includes/header.php'); 
  include('includes/navbar.php'); 
  include('includes/connect.php');

$sotin1trang = 5;

if(isset($_GET["trang"]))
{
    $trang = $_GET["trang"];
}
else
{
    $trang = 1;
}
?>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h7 class="m-0 font-weight-bold text-primary">Thông tin các lớp
              <a style="float:right" href="add_class.php">
                Thêm mới lớp
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
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên Lớp</th>
            <th>Chuyên ngành</th>
            <th>Giáo viên chủ nhiệm</th>
            <th>Sửa</th>
            <th>Xóa</th>
          </tr>
        </thead>
        <tbody>
          <?php 
             $no = 1;
             $from = ($trang - 1) * $sotin1trang;
             $qr = "SELECT * FROM class LIMIT $from, $sotin1trang";
             $query_run1=mysqli_query($connect,$qr);

              if(mysqli_num_rows($query_run1)>0)
              {
                
                while($row=mysqli_fetch_assoc($query_run1))
                {
                  
                  ?>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['tenlop']; ?></td>
                        <td>
                          <?php
                         if($row['id_cn'] == 1)
                         {
                           echo "Công nghệ phần mềm";
                         }
                         if($row['id_cn'] == 2)
                         {
                           echo "Công nghệ thông tin";
                         }
                         if($row['id_cn' ]== 3)
                         {
                           echo "Hệ thống thông tin";
                         }
                        if($row['id_cn'] == 4)
                         {
                           echo "An toàn thông tin";
                         }
                         if($row['id_cn'] == 5)
                         {
                           echo "Mạng máy tính và truyền thông số";
                         }
                         else{
                           echo ' ';
                         }
                         ?>
                         </td>
                        <td><?php echo $row['gvcn']; ?></td>
                        <td>
                            <form action="edit_class.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button  type="submit" name="edit_class" class="btn btn-info btn-circle"><i class="fa fa-edit edit"></i></button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="post">
                              <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                              <button onclick="return confirm('Bạn có muốn xóa lớp')" href="code.php?id=<?php echo $row['tenlop'];?>" type="submit" name="delete_class" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
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
        <div class="col-md-6">
        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
        <?php
                      $x = "SELECT id FROM class";

                      $query_run2=mysqli_query($connect,$x);

                      $tongsotin = mysqli_num_rows($query_run2);

                      $sotrang = ceil($tongsotin/$sotin1trang);

                      for($i = 1 ; $i<=$sotrang; $i++)
                      {
                  
                        echo "<a href='class.php?trang=$i'>Trang $i  </a>";

                      }
        ?>
        </div>
        </div>
    </div>
  </div>
</div>
</div>
<?php
  include('includes/scripts.php');
?>