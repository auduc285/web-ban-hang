<?php
    session_start();
    if(empty($_POST['email']) || empty($_POST['password'])) {
        $_SESSION['error'] = 'Không được để trống thông tin';
        header('location:./login.php');
        exit;
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    require './admin/connect.php';
    $sql = "select * from customer where email = '$email' and password = '$password'";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1) {
        $each = mysqli_fetch_array($result);
        $_SESSION['email'] = $each['email'];
        $_SESSION['name'] = $each['name'];
        $_SESSION['ID'] = $each['ID'];
        header('location:./index.php');
        exit;
    }else {
        $_SESSION['error'] = 'Thông tin đăng nhập sai';
        header('location:./login.php');
        exit;
    }
?>