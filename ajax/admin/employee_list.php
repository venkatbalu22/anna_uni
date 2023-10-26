<?php
    require_once '../../datab.php';
    $res = [];

    $sql = "SELECT * FROM user_data WHERE status='Active' ";

    if($result = mysqli_query($conn, $sql)) {
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data Sent';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to sent data';
    }
    echo json_encode($res);
?>