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
    <h7 class="m-0 font-weight-bold text-primary">Học bổng
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
$query="SELECT * FROM point";
$query_run=mysqli_query($connect,$query);


 ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <!-- <th> ID </th> -->
            <th>Họ Tên</th>
            <th>Điểm 1</>
            <th>Điểm 2</th>
            <th>Điểm 3</th>
            <th>Điểm TB</th>
            <th>Trạng thái</th>
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
                        
                      <tr>
                        <td><?php echo $row['id_sv']; ?></td>
                        <td><?php echo $row['diem1']; ?></td>
                        <td><?php echo $row['diem2']; ?></td>
                        <td><?php echo $row['diem3']; ?></td>
                        <td><?php echo $row['tbc']; ?></td>
                        <td>
                            <?php
                                if($row['tbc']>=8)  
                                {
                                    //echo "Học bổng loại giỏi";
                                    echo "Học bổng loại giỏi";
                                }
                                if($row['tbc']>=7 && $row['tbc']<8 )  
                                {
                                    echo "Học bổng loại khá";
                                }
                                else
                                {
                                    echo ' ';
                                }
                            ?>
                        </td>
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