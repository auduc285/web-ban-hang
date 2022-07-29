<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['level'] == 0) {
        if(empty($_GET['id'])) {
            header('location:../index.php');
            exit;
        }
        $ID = $_GET['id'];

        require '../connect.php';
        $sql = "select * from bell where ID = '$ID'";
        $result = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($result);
        if($num == 0) {
            header('location:../index.php');
            exit;
        }

        $sql = "delete from bell where ID = '$ID'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:./bell.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>