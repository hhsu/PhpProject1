<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Accessing Cookies with PHP</title>
    </head>
    <body>
        <?php
        if (isset($_COOKIE["name"])) {
            echo "Welcome " . $_COOKIE["name"] . "<br />";
            echo $_COOKIE["age"] . "<br />";
        } else {
            echo "Sorry... Not recognized" . "<br />";
        }

        // put your code here
        ?>
    </body>
</html>
