<head>
    <style>
        * {
            text-decoration: none;
            list-style: none;
            color: black;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.2);
        }

        h2 {
            font-size: 20px;
            font-weight: 700
        }

        .flex {
            display: flex;
        }

        ul li:not(:first-child) {
            padding: 5px;
        }

        .short_links ul {
            margin: 0 110px;
        }

        .sub_main .dropdown .dropbtn {
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .sub_main .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .sub_main .dropdown .dropdown-content {
            display: none;
            position: absolute;
            background-color: #CCCCCC;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .sub_main .dropdown .dropbtn .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .sub_main .dropdown .dropbtn .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        /* Show the dropdown menu on hover */
        .sub_main .dropdown:hover .dropdown-content {
            display: flex;
            flex-direction: column;
        }
    </style>
    <link rel="stylesheet" href="./css/hello.css">
</head>

<footer style="margin: 30px auto 0;">
    <div class="main" style="align-items:center; padding:40px; ">
        <div class="sub_main">
            <div class="short_links flex" style="justify-content:center; ">
                <ul>
                    <h2>Lối Tắt</h2>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Thể Loại🔻</a>
                            <div class="dropdown-content">
                                <a href="index.php#Adventure">Adventure</a>
                                <a href="index.php#Magical">Magic</a>
                                <a href="index.php#Medieval">Medieval</a>
                                <a href="index.php#Knowledge">Knowledge</a>
                                <a href="index.php#Romance">Romance</a>
                                <a href="index.php#Detective">Detective</a>
                                <a href="index.php#SelfHelp">SelfHelp</a>
                                <a href="index.php#Sciene">Sciene Fiction</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="about-us.php">Giới Thiệu</a></li>
                </ul>
                <?php
                if (isset ($_SESSION['user_name'])) {
                    echo '
                <ul class="account">
                    <h2>Tài Khoản</h2>
                    <li><a href="">Cá Nhân</a></li>
                    <li><a href="cart.php">Giỏ Hàng</a></li>
                    <li><a href="orders.php">Lịch Sử Đơn Hàng</a></li>
                    <li><a href="logout.php">Đăng Xuất</a></li>
                </ul>';
                }
                ?>
                <ul>
                    <h2>Liên Hệ</h2>
                    <li><a href="contact-us.php">Mẫu Liên Hệ</a></li>
                    <li>0707867864</li>
                    <li>tranhuumy2902@gmail.com</li>
                    <li>Địa chỉ: Cần Thơ, Việt Nam</li>
                </ul>

            </div>
        </div>
        <div style=" align-items:center; justify-content:center; margin:20px 0 0 ;" class="cmsg flex">
            <p>Designed By THM | Copyright &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>-
            </p>
            <div style="font-size: 30px;" class="logo">
                <a href="index.php"><span style="font-size: 15px;"> OldBook </span>
                    <span class="me" style="font-size: 15px;">Store</span></a>
            </div>
        </div>
    </div>
</footer>