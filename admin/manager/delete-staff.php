<?php
    session_start();
    if(isset($_SESSION['ID'])) {
        $ID = $_GET['id'];
        require '../connect.php';
        $sql = "delete from staff where ID = '$ID'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:./staff.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>