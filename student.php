<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('connect.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Code</label>
                <input type="number" name="code" class="form-control" placeholder="Enter Code">
            </div>
            <div class="form-group">
                <label>Class</label>
                <input type="text" name="class" class="form-control" placeholder="Enter Class">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="Enter Phone">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-info">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Student Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Student Profile 
            </button>
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
$query="SELECT * FROM sinhvien";
$query_run=mysqli_query($connect,$query);


 ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <!-- <th> ID </th> -->
            <th>NAME </th>
            <th>CODE</th>
            <th>CLASS</th>
            <th>PHONE</th>
            <th>EDIT </th>
            <th>DELETE </th>
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
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['class']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td>
                            <form action="edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button  type="submit" name="edit_btn" class="btn btn-success"><i class="fa fa-edit edit"></i></button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="post">
                              <input type="hidden" name="delete_id" value="">
                              <button type="submit" name="delete_btn" class="btn btn-danger"><i class="fa fa-edit delete"></i></button>
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
// include('includes/footer.php');
?>