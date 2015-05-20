<?php

if ($_POST['someone_is_coming'] == 'yeah'):
    $to = 'gramsjam2015@gmail.com';
    $message = "Who: ".$_POST['attendee_name'] . "\r\n";
    $message .= "Email: ".$_POST['attendee_email'] . "\r\n";
    $message .= "How Many: ".$_POST['attendee_count'] . "\r\n";
    $message .= "Spending the night/Camping Gear?: ".$_POST['attendee_camping'] . "\r\n";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= 'From: Website <tim@grams-jam.com>' . "\r\n";
    mail($to, 'Someone\'s Comin Thru', $message, $headers);
endif;
return true;
?>
