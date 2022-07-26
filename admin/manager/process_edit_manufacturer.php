<?php
    session_start();
    if(isset($_SESSION['ID'])) {
        $ID = $_POST['ID'];
        if(empty($_POST['name'])) {
            $_SESSION['error'] = 'Không được để trống thông tin';
            header("location:./edit-manufacturer.php?id='$ID'");
            exit;
        }

        $name = $_POST['name'];
        require '../connect.php';
        $sql = "update manufacturer set name = '$name' where ID = '$ID'";
        mysqli_query($connect, $sql);
        header('location:./manufacturer.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>