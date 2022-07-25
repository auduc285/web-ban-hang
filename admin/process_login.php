<?php
    session_start();
    if(empty($_POST['email']) || empty($_POST['password'])){
        $_SESSION['error'] = 'Thông tin đăng nhập sai';
        header('location:index.php');
        exit;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    require './connect.php';
    $sql = "select * from staff where email = '$email' and password = '$password'";
    $result = mysqli_query($connect, $sql);
    $number = mysqli_num_rows($result);

    if($number == 0){
        $_SESSION['error'] = 'Thông tin đăng nhập sai';
        header('location:index.php');
        exit;
    }else{
        $each = mysqli_fetch_array($result);
        $_SESSION['name'] = $each['name'];
        $_SESSION['ID'] = $each['ID'];
        if($each['level'] == 0){
            header('location:manager');
            exit;
        }else{
            header('location:staff');
            exit;
        }
    }
?>