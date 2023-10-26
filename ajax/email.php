<?php
    
    $res = [];

    if(isset($_POST['email']))
    {
        $name    = $_POST['name'];
        $subject = $_POST['subject'];       
        $email   = $_POST['email'];
        $message = $_POST['message'];

        $to = 'muralidharana71@gmail.com';
        $from = "From: $email";
        $body ="Name: $name\nSubject: $subject\nMessage: $message";

        $headers = "From: $email\r\nReply to: $email";
        if(mail($to, $from, $subject, $body))
        {
            $res['status']  = 'Success';
            $res['remarks'] = 'Email sent successfully';
        }
        else
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Unable to send email.';
        }
    }
    else
    {
        $res['status']  = 'Error';
        $res['remarks'] = 'Error in backend';
    }

    echo json_encode($res);
?>