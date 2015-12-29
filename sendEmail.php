<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sending email using PHP</</title>
    </head>
    <body>
        <?php
        // put your code here
        $to = "sai_1012@163.com";
        $subject = "This is subject";
        $message = "This is simple text message.";
        $header = "From:sai_1012@163.com \r\n";
        $retval = mail($to, $subject, $message, $header);
        if ($retval == true) {
            echo "Message sent successfully...";
        } else {
            echo "Message could not be sent...";
        }
        ?>
    </body>
</html>
