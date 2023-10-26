<?php
    require_once '../datab.php';

    session_start();
    if(!isset($_SESSION['check'])) {
      header('Location: staff-login.php');
    }
?>