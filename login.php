<form action="controller.php" method="post" enctype="multipart/form-data">

 <input type="text" name="txtName" placeholder="Tài khoản" />

 <input type="password" name="txtPass" placeholder="Mật khẩu" />

 <input type="submit" name="btnSend" value="Đăng nhập" />

</form>

 <?php

 session_start();

 if(isset($_SESSION['us']) && $_SESSION['us'] != NULL){

 //nếu có session tên us thì ta thực hiện lệnh dưới

 ?>

<p>

 Xin chào:

<?php 
    echo $_SESSION['us']; 
?>

<a href="logout.php">Thoát</a>

 <p>

<?php
    }
?>