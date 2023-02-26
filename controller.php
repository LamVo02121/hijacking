<?php
   session_start();

   if(isset($_POST['btnSend'])){ //nếu có sự kiện click vào nút đăng nhập thì xử lý

   $username = $_POST['txtName']; //txtName là tên của input người dùng nhập vào

   $password = $_POST['txtPass']; //txtPass là tên của input người dùng nhập vào

   if($username == 'ad' && $password == '123'){ 
      echo 'Bạn đã đăng nhập thành công';
      $_SESSION['us'] = $username;
   }
   else{
      echo 'Đăng nhập thất bại, tài khoản hoặc mật khẩu chưa chính xác.';
   }
 }
 ?>