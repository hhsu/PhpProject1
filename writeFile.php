<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// put your code here
$filename = "D:/aaa.txt";
$file = fopen($filename, "w");
if ($file == false) {
    echo ( "Error in opening new file" );
    exit();
}
fwrite($file, "This is a simple test\n");

$file1 = fopen($filename, "r");
$filesize = filesize($filename);
$readfile = fread($file1, $filesize);

fclose($file);

echo ("<b>content:</b><br>".$readfile."<br>" );
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Writing a file using PHP</title>
    </head>
    <body>

        <?php
        if (file_exists($filename)) {
            $filesize = filesize($filename);
            
//            $readfile = fread($file, $filesize);
            
            $msg = "File created with name $filename <br>";
            $msg .= "containing $filesize bytes<br>";
            echo ($msg );
//            echo ("<b>content:</b><br>".$readfile );
        } else {
            echo ("File $filename does not exit" );
        }
        ?>
    </body>
</html>
