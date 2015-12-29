<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>File Uploading Form</title>
    </head>
    <body>
        <h3>File Upload:</h3>
        Select a file to upload: <br />
        <form action = "/PhpProject1/uploadFile.php" method = "post"
              enctype = "multipart/form-data">
            <input type = "file" name = "file" size = "50" />
            <br />
            <input type = "submit" value = "Upload File" />
        </form>
    </body>
</html>
