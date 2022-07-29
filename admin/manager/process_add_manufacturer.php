<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['level'] == 0) {
        if(empty($_POST['name'])) {
            $_SESSION['error'] = 'Không được để trống thông tin';
            header('location:./add-manufacturer.php');
            exit;
        }

        $name = $_POST['name'];

        require '../connect.php';
        $sql = "insert into manufacturer(name) value ('$name')";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:./manufacturer.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>