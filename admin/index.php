<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/reponsive.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css">
</head>
<body>
    <div class="admin">
        <form class="admin__login" action="process_login.php" method="post">
            <h2 class="admin__login-logo">TOTRINH</h2>
            <span class="admin__login-text">Đăng nhập</span>
            <input type="text" placeholder="Email" required name="email" class="admin__login-input">
            <input type="password" placeholder="Mật Khẩu" required name="password" class="admin__login-input">
            <button class="admin__login-btn">ĐĂNG NHẬP</button>
            <?php if(isset($_SESSION['error'])){ ?>
            <span style="color:red; font-size: 1.6rem" class="error">
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </span>
            <?php } ?>
        </form>
    </div>
</body>
</html>