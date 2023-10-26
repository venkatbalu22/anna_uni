<?php
    require_once '../../datab.php';
    $res = [];

    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $enc_pass = md5('anna_uni'.$pass);

    $sql = "SELECT * FROM user_data WHERE phone='$phone' AND password='$enc_pass' ";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)) {
        session_start();
        $_SESSION['check'] = 'Logged'; 
        $_SESSION['id']    = $row['id'];
        $_SESSION['role']  = $row['role'];
        $_SESSION['name']  = $row['name'];

        $res['role'] = $row['role'];
        $res['name'] = $row['name'];

        $res['status'] = 'Success';
        $res['remarks'] = 'Logged in Successfully';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Invalid phone or password';
    }
    echo json_encode($res);
?>