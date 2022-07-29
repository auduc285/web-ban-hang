<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['ID'] != NULL) {
        unset($_SESSION['ID']);
        header('location:../index.php');
        exit;
    }else {
        header('../index.php');
        exit;
    }
?>