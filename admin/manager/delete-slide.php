<?php
    session_start();
    if(isset($_SESSION['ID'])) {
        if(empty($_GET['id'])) {
            header('location:../index.php');
            exit;
        }
        $ID = $_GET['id'];
        require '../connect.php';
        $sql = "select * from slide where ID = '$ID'";
        $result = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($result);
        if($num == 0) {
            header('location:../index.php');
            exit;
        }else {
            $sql = "delete from slide where ID = '$ID'";
            mysqli_query($connect, $sql);
            mysqli_close($connect);
            header('location:./slide.php');
        }
    }else {
        header('location:../index.php');
        exit;
    }
?>