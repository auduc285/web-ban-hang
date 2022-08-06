<?php
    session_start();
    if(isset($_SESSION['ID'])) {
        if(empty($_GET['id'])) {
            header('location:../index.php');
            exit;
        }
        $ID = $_GET['id'];
        $note = "Được xác nhận bởi ".$_SESSION['name'];
        require '../connect.php';
        $sql = "update bill set now = 1, note = '$note' where ID = '$ID'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:./bill.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>