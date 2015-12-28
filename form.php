<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if ($_POST['name'] || $_POST['age']) {
    echo "Welcome " . $_POST['name'] . "<br>";
    echo "You are " . $_POST['age'] . " years old.";
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
        require ("form1.php");
        ?>
        <form action="<?php $_PHP_SELF ?>" method="post">
            Name: <input type="text" name="name" />
            Age: <input type="text" name="age" />
            <input type="submit" />
        </form>
    </form>
</body>
</html>
