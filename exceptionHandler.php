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
        try {
            $error = 'Always throw this error';
            throw new Exception($error);
// Code following an exception is not executed.
            echo 'Never executed';
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
// Continue execution
        echo 'Hello World';
        ?>
    </body>
</html>
