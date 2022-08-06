<?php
    session_start();
    if (isset($_SESSION['ID'])) {
        if (!isset($_GET['id'])) {
            header('location:./log-out.php');
            exit;
        }
        $ID = $_GET['id'];
        require '../connect.php';
        $sql = "select * from bill where ID = '$ID'";
        $result = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $sql = "delete from bill where ID = '$ID'";
            mysqli_query($connect, $sql);
            mysqli_close($connect);
            header('location:./bill.php');
        }else {
            header('locayion:./bill.php');
            exit;
        }
    }else {
        header('location:../index.php');
        exit;
    }
?>