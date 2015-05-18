<?php
if ($_POST['someone_is_coming'] == 'yeah'):
    $to = 'gramsjam2015@gmail.com';
    $message = 'Who: '.$_POST['attendee_name'] . "\r\n";
    $message = 'How Many: '.$_POST['attendee_count'] . "\r\n";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= 'From: Website <tim@grams-jam.com>' . "\r\n";
    //mail($to, 'Someone\'s Comin Thru', $message, $headers);
endif;
//$to      = 'tbthorpe@gmail.com';
//$subject = 'grams jam test';
//$message = 'hello';
//$headers = 'From: tim@paddle8.com' . "\r\n" .
//    'Reply-To: tim@paddle8.com' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//mail($to, $subject, $message, $headers);
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="fonts/stylesheet.css"> 
        <title>Grams Jam: 2015 Edition</title>
        
    </head>
    <body>
        <div id="marquee_text">
        <span class="bigger"><?= "GRAMS JAM: 2015" ?></span>
        </div>
        <div id="content">
            
            <div id="info_content">
                <ul>
                    <li><b>What:</b>The 2015 version of the 2014 smash hit, Grams Jam. But also just an amazing party/music festival with a lot of your friends. And there's food (made by a better chef than Sarah) and cocktails and more Dawson's Creek themed games/prizes than ever before!</li>
                    <li><b>When:</b>Saturday June 27th, bands start at 2pm</li>
                    <li><b>Where:</b>Point of the Bluff Vineyards 8524 Broadview Heights Dr. Keuka Park, NY 14478</li>
                    <li><b>Food/Drink:</b> Garbage plates and late night pizzas created by our favorite chef Brian Durnin, Fordham Beer, Point of the Bluff Wine and Specialty Dawson's Creek themed cocktails created by mixologist Chris McCleod. Brian and Chris will also be serving breakfast burritos, mimosas, and bloody marys for those staying the night</li>
                    <li><b>More info coming this week!</b></li>
                </ul>
            </div>
        </div>
    </body>
</html>
