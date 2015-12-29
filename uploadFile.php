<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if ($_FILES['file']['name'] != "") {
    echo "haha:".$_FILES['file']['name']."<br>";
    fopen($_FILES['file']['name'], "r+");
//    fopen("/input/aaac.txt", "w");
    fopen("D:/input/aaac.txt", "w+");
    copy($_FILES['file']['name'], "D:/input/aaac.txt") or
            die("Could not copy file!");
} else {
    die("No file specified!");
}
?>
<html>
    <head>
        <title>Uploading Complete</title>
    </head>
    <body>
        <h2>Uploaded File Info:</h2>
        <ul>
            <li>Sent file: <?php echo $_FILES['file']['name']; ?>
            <li>File size: <?php echo $_FILES['file']['size']; ?> bytes
            <li>File type: <?php echo $_FILES['file']['type']; ?>
        </ul>
    </body>
</html>
