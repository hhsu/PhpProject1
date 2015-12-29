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

        // function1
        function callMessage(&$num1, &$num2) {
            echo "haha call me!<br>";
            $res = $num1 + $num2;
            echo "result: $res<br>";
        }

        $n1 = 10;
        $n2 = 20;
        callMessage($n1, $n2);

        // function 2
        function addFive(&$num) {
            $num += 5;
        }

        function addSix(&$num) {
            $num += 6;
        }

        $orignum = 10;
        addFive($orignum);
        echo "Original Value is $orignum<br />";
        addSix($orignum);
        echo "Original Value is $orignum<br />";

        //function 3 default value
        function printMe($defaultParam = null) {
            print $defaultParam;
        }

        print "This is a test<br>";
        printMe();

        //function 4 assign function names as strings to variable
        function sayHello() {
            echo "Hello<br />";
        }

        $function_holder = "sayHello";
        $function_holder();
        ?>
    </body>
</html>
