<?php
    session_start();
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) ||
       empty($_POST['password']) || empty($_POST['password_again'])) {
        $_SESSION['error'] = 'Không được để trống thông tin';
        header('location:./register.php');
        exit;
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $password_again = $_POST['password_again'];


    if(strcmp($password, $password_again) != 0) {
        $_SESSION['error'] = 'Mật khẩu nhập lại không đúng';
        header('location:./register.php');
        exit;
    }

    require './admin/connect.php';
    $sql = "select * from customer where email = '$email'";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    if($num != 0) {
        $_SESSION['error'] = 'Email đã tồn tại';
        header('location:./register.php');
        exit;
    }
    $sql = "select * from customer where phone = '$phone'";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    if($num != 0) {
        $_SESSION['error'] = 'Email đã tồn tại';
        header('location:./register.php');
        exit;
    }

    $sql = "insert into customer(name, phone, email, password)
            value('$name', '$phone', '$email', '$password')";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header('location:./login.php');
?>