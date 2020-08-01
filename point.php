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
    <h7 class="m-0 font-weight-bold text-primary">Bảng điểm
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
// $query="SELECT * FROM point";
// $query_run=mysqli_query($connect,$query);
$query_3="SELECT student.name,code, points.id, diem1, diem2, diem3, tbc FROM student INNER JOIN points ON student.id = points.id_sv";
$query_run3=mysqli_query($connect,$query_3);


 ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <!-- <th> ID </th> -->
            <th>Họ Tên</th>
            <th>Mã SV</th>
            <th>Điểm 1</>
            <th>Điểm 2</th>
            <th>Điểm 3</th>
            <th>Điểm TB</th>
            <th>Trạng thái</th>
            <th>Sửa</th>
          </tr>
        </thead>
        <tbody>
          <?php 
              if(mysqli_num_rows($query_run3)>0)
              {
                while($row=mysqli_fetch_assoc($query_run3))
                {
                  
                  ?>

                      <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['diem1']; ?></td>
                        <td><?php echo $row['diem2']; ?></td>
                        <td><?php echo $row['diem3']; ?></td>
                        <td><?php echo round($row['tbc'],1); ?></td>
                        <td>
                            <?php
                                if($row['tbc']>=8)  
                                {
                                    //echo "Học bổng loại giỏi";
                                    echo '<span class="badge badge-success">Học bổng loại giỏi</span>';
                                }
                                if($row['tbc']>=7 && $row['tbc']<8 )  
                                {
                                    echo '<span class="badge badge-primary">Học bổng loại khá</span>';
                                }
                                else
                                {
                                    echo ' ';
                                }
                            ?>
                        </td>
                        <td>
                            <form action="edit_point.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button  type="submit" name="edit_point" class="btn btn-info btn-circle"><i class="fa fa-edit edit"></i></button>
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