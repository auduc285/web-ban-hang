<?php
    session_start();
    if(isset($_SESSION['ID'])) {
        $ID = $_GET['id'];
        require '../connect.php';
        $sql = "select * from manufacturer where ID = '$ID'";
        $result = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($result);
        if($num == 0) {
            header('location:./manufacturer.php');
            exit;
        }else {
            $sql = "delete from manufacturer where ID = '$ID'";
            mysqli_query($connect, $sql);
            mysqli_close($connect);
            header('location:./manufacturer.php');
            exit;
        }
    }else {
        header('location:../index.php');
        exit;
    }
?>