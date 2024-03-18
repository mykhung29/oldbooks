<?php
    include 'config.php';
    if(isset($_POST['submit'])) {
      $name = mysqli_real_escape_string($conn, $_POST['Name']);
      $Sname = mysqli_real_escape_string($conn, $_POST['Sname']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, ($_POST['password']));
      $cpassword = mysqli_real_escape_string($conn, ($_POST['cpassword']));
      $user_type = $_POST['user_type'];

      $select_users = $conn->query("SELECT * FROM users_info WHERE email = '$email'") or die('query failed');

      if(mysqli_num_rows($select_users)!=0){
        $message[]='Tài khoản đã tồn tại';
      }else{
        if($password !=$cpassword){
          $message[] = 'Mật khẩu không trùng khớp';
        }else{
          mysqli_query($conn, "INSERT INTO users_info(`name`, `surname`, `email`, `password`, `user_type`) VALUES('$name','$Sname','$email','$password','$user_type')") or die('Query failed');
          $message[]='Đăng ký tài khoản thành công';
        }
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/register.css  " />

    <title>Đăng ký</title>
    <style>
      .container2 {
  display: flex;
  justify-content: center;
  background-image: linear-gradient(45deg,
    rgba(0, 0, 3, 0.1),
    rgba(0, 0, 0, 0.5)), url(../bgimg/2.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  height: 98vh;
}
    </style>
    <style>
       .container form .link{
            text-decoration: none; color:white;  border-radius: 17px; padding: 8px 18px; margin: 0px 10px; background: rgb(0, 0, 0); font-size: 20px;
        }
        .container form .link:hover{
            background: rgb(0, 167, 245);
        }
    </style>
  </head>
  <body>
  <?php
    if(isset($message)){
      foreach($message as $message){
        echo '
        <div class="message" id= "messages"><span>'.$message.'</span>
        </div>
        ';
      }
    }
    ?>
    <div class="container">
      <form action="" method="post">
         <h3 style="color:white">Đăng ký sử dụng <a href="index.php"><span>OldBook </span><span>Store</span></a></h3>
         <input type="text" name="Name" placeholder="Nhập tên" required class="text_field ">
         <input type="text" name="Sname" placeholder="Nhập họ" required class="text_field">
         <input type="email" name="email" placeholder="Nhập địa chỉ email" required class="text_field">
         <input type="password" name="password" placeholder="Nhập mật khẩu" required class="text_field">
         <input type="password" name="cpassword" placeholder="Xác nhận mật khẩu" required class="text_field">
         <select name="user_type" id="" required class="text_field">
            <option value="User">User</option>
            <option value="Admin">Admin</option>
         </select>
         <input type="submit" value="Register" name="submit" class="btn text_field">
         <p>Đã có tài khoản? <br> <a class="link" href="login.php">Đăng nhập</a><a class="link" href="index.php">Trở ra</a></p>
      </form>
    </div>
    <!-- <div class="container">
      <form action="" method="post">
         <h3 style="color:white">Đăng ký sử dụng <a href="index.php"><span>OldBook </span><span>Store</span></a></h3>
         <input type="text" name="Name" placeholder="Nhập tên" required class="text_field ">
         <input type="text" name="Sname" placeholder="Nhập họ" required class="text_field">
         <input type="email" name="email" placeholder="Nhập địa chỉ email" required class="text_field">
         <input type="password" name="password" placeholder="Nhập mật khẩu" required class="text_field">
         <input type="password" name="cpassword" placeholder="Xác nhận mật khẩu" required class="text_field">
         <input type="hidden" name="user_type" value="User">
         <input type="submit" value="Register" name="submit" class="btn text_field">
         <p>Đã có tài khoản? <br> <a class="link" href="login.php">Đăng nhập</a><a class="link" href="index.php">Trở ra</a></p>
      </form>
    </div> -->

    <script>
setTimeout(() => {
  const box = document.getElementById('messages');

  box.style.display = 'none';
}, 8000);
</script>
  </body>
</html>
