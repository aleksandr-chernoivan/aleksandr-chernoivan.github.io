<?php
    $to_email = 'umap23.conference@gmail.com';
    $subject = 'Testing PHP Mail';
    $message = 'This mail is sent using the PHP mail function';
    $headers = 'From: yustiks@gmail.com';
    mail($to_email,$subject,$message,$headers);
?>
