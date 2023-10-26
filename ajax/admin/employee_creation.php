<?php
    require_once '../../datab.php';
    $res = [];
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $phone = mysqli_real_escape_string($conn, $_POST['number']);
        $role  = mysqli_real_escape_string($conn, $_POST['role']);
        $pass  = mysqli_real_escape_string($conn, $_POST['password']);
        
        $enc_pass = md5('anna_uni'.$pass);

        $result = mysqli_query($conn, "INSERT INTO user_data (`name`, `phone`, `role`, `password`, `status`, `dateTime`) VALUES ('$name', '$phone', '$role', '$enc_pass', 'Active', '$dateTime')");

        if($result) {
            $res['status'] = 'Success';
            $res['remarks'] = 'Employee Created Successfully';
        } else {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Unable to create Employee';
        }
    } else {
        $res['status']  = 'Error';
        $res['remarks'] = 'Method not post';
    }
    echo json_encode($res);
?>