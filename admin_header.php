<!-- <?php 
// session_start();
// if(isset($_GET['logout'])){
//     header('location:login.php');
// }
// ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Trang chủ Admin</title>
</head>
<body>
    
<header><div class="mainlogo">
        <div class="logo">
            <a href="admin_index.php"><span>OldBook </span>
            <span class="me">Store</span></a>
        </div><p>Administration</p></div>
        <div class="nav">
            <a href="admin_index.php">Trang Chủ</a>
            <a href="add_books.php">Thêm Sách</a>
            <a href="admin_orders.php">Đơn Hàng</a>
            <a href="message_admin.php">Tin Nhắn</a>
            <a href="users_detail.php">Tài Khoản Khách Hàng</a>

        </div>
        <div class="right">
            <div class="log_info">
                <p>Xin Chào, <?php echo $_SESSION['admin_name'];?></p> 
            </div>
            <a class="Btn" href="logout.php?logout=<?php echo $_SESSION['admin_name'];?>">Đăng xuất</a>
        </div>
    </header>

</body>
</html>