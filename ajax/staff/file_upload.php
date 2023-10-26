<?php
    require_once '../../datab.php';

    $file_name = mysqli_real_escape_string($conn, $_POST['filename']);
    $desc = mysqli_real_escape_string($conn, $_POST['message']);
   
    $file = $_FILES['uploadfile']['name'];
    $file_basename = basename($file);
    $file_ext = pathinfo($file_basename, PATHINFO_EXTENSION);

    
?>