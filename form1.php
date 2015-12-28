<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if ($_POST["location"]) {
    $location = $_POST["location"];
    header("Location:$location");
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <p>Choose a site to visit :</p>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <select name="location">
                <option value="http://w3c.org">
                    World Wise Web Consortium
                </option>
                <option value="http://www.google.com">
                    Google Search Page
                </option>
            </select>
            <input type="submit" />
        </form>
    </body>
</html>
