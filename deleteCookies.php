<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    setcookie("name", "barry", time()-60, "/", "", 0);
    setcookie("age", "30", time()-60, "/", "", 0);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete cookies</title>
    </head>
    <body>
        <?php
        // put your code here
        echo "Cookies deleted!";
        ?>
    </body>
</html>
