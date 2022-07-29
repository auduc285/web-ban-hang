<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['level'] == 0) {
        $ID = $_GET['ID'];
        require '../connect.php';
        $sql = "select * from customer where ID = '$ID'";
        $result = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($result);
        if($num == 0) {
            header('location:../index.php');
            exit;
        }else {
            $sql = "delete from customer where ID = '$ID'";
            mysqli_query($connect, $sql);
            mysqli_close($connect);
            header('location:./customer.php');
        }
    }else {
        header('location:../index.php');
        exit;
    }
?>