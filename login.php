<?php
session_start();
include('includes/header.php'); 
include('includes/connect.php'); 
if (isset($_SESSION['id'])) {
    header('Location: index.php');
  }
?>




<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Hệ thống quản lý sinh viên Fita</h1>
                <?php

                if ($_SERVER['REQUEST_METHOD']=='POST') {
                $errors = array();
                if (empty($_POST['email'])) {
                  $errors[] = 'email';
                }else{
                  $email = $_POST['email'];
                }
                if (empty($_POST['password'])) {
                  $errors[] = 'password';
                }else{
                  $password = $_POST['password'];
                }
                if (empty($errors)) {
                  $query = "SELECT id,email,password FROM admin WHERE email='{$email}' AND password = '{$password}'";
                  $result = mysqli_query($connect,$query);
                  if (mysqli_num_rows($result)==1) {
                    list($id,$email,$password)= mysqli_fetch_array($result,MYSQLI_NUM);
                    $_SESSION['id']=$id;
                    $_SESSION['user'] = $email;
                    $_SESSION['password'] = $password;
                    header('Location: index.php');
                    
                  }else{
                        $message = "<h6>Tài Khoản Hoặc Mật Khẩu Không Đúng.</h6>" ;
                  }
                }
              }
                ?>
              </div>

                <form class="user" action="login.php" method="POST">
                    <?php 
                        if (isset($message)) {
                          echo $message;
                        }
                         ?>
                    <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" placeholder="Nhập vào email">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Nhập vào password">
                    </div>
            
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Đăng nhập </button>
                   
                </form>


            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>


<?php
include('includes/scripts.php'); 
?>