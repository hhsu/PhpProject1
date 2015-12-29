<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $date_array = getdate();
        foreach ($date_array as $key => $val) {
            print "$key = $val<br />";
        }
        $formated_date = "Today's date: ";
        $formated_date .= $date_array[mday] . "/";
        $formated_date .= $date_array[mon] . "/";
        $formated_date .= $date_array[year];
        print $formated_date."<br>";
        
        print date("m/d/y H:i:s<br>", time());
        ?>
    </body>
</html>
