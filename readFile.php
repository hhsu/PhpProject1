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
        $filepath = "D:/aaa.txt";
        $file = fopen($filepath, "r");
        
        if($file == false){
            echo "Error in opening file";
            exit();
        }
        $filesize = filesize($filepath);
        $readfile = fread($file, $filesize);
        
        fclose($file);
        echo "file size: $filesize bytes";
        echo "<pre>$readfile</pre>";
        ?>
    </body>
</html>
