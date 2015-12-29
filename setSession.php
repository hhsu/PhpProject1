<!DOCTYPE html>
<!--
example starts a session and then registers a variable called counter that is incremented each time the page is visited during the session.
Make use of isset() function to check if session variable is already set or not.
-->
<?php
session_start();
//unset a single variable
//unset($_SESSION['counter']);
//destroy all the session variables
session_destroy();
if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
} else {
    $_SESSION['counter'] = 1;
}
$msg = "You have visited this page " . $_SESSION['counter'];
$msg .= " times in this session.";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Setting up a PHP session</title>
    </head>
    <body>
        <?php
        // put your code here
        echo ( $msg );
        ?>
    </body>
</html>
