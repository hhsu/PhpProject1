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
        echo "<p>Hello World!</p>";
        /* dsadsa
          dsaq123 */
        print "wagaga";
        $capital = 67;
        print("variable \$capital is $capital<br>");

        /* math statement */
        $many = 2.2888800;
        $many_2 = 2.2111200;
        $few = $many + $many_2;
        print($many + $many_2 = $few);
        /* boolean */
        $bvar = true;
        if ($bvar) {
            print "aaa<br>";
        } else {
            print "bbb<br>";
        }

        /* array */
        $arr = array();

        /* difference between echo and print */
        $a = 'hello';
        $b = 'php world';
        echo $a, $b . "\n";
        print($a . $b . '<br>');

        /* constant() */
        define("MINSIZE", 50);
        echo MINSIZE . "<br>";
        echo constant("MINSIZE") . "<br>";
        echo "current line number:" . __LINE__ . "<br>";
        echo "file path:" . __FILE__ . "<br>";
        echo "function name:" . __FUNCTION__ . "<br>";
        echo "class name:" . __CLASS__ . "<br>";
        echo "method name:" . __METHOD__ . "<br>";

        /* if else */
        $a = 42;
        $b = 0;
        if ($a && $b) {
            echo "TEST1 : Both a and b are true<br/>";
        } else {
            echo "TEST1 : Either a or b is false<br/>";
        }

        $d = date("D");
        echo "Today is: $d <br>";
        if ($d == "Fri") {
            echo "Have a nice weekend!<br>";
        } else {
            echo "Have a nice day!<br>";
        }

        /* for each */
        $arr = array(1, 2, 3, 4, 5);
        foreach ($arr as $value) {
            if ($value == 3) {
                continue;
            }
            echo "$value<br>";
        }

        /* array */
        $arrayT = array(
            "aaa" => 2000,
            "bbb" => 1000,
            "ccc" => 500
        );
        echo "aaa is:" . $arrayT['aaa'] . "<br>";
        echo "bbb is:" . $arrayT['bbb'] . "<br>";
        echo "ccc is:" . $arrayT['ccc'] . "<br>";

        $arrayT['aaa'] = "high";
        $arrayT['bbb'] = "medium";
        $arrayT['ccc'] = "low";
        echo "aaa is:" . $arrayT['aaa'] . "<br>";
        echo "bbb is:" . $arrayT['bbb'] . "<br>";
        echo "ccc is:" . $arrayT['ccc'] . "<br>";

        foreach ($arrayT as $value) {
            echo "$value<br>";
        }

        /* strlen method */
        $ss = "Get the length of string";
        echo "length of ss:" . strlen($ss) . "<br>";
        echo "string position:" . strpos($ss, "string") . "<br>";

        /* getenv */
        $viewer = getenv("HTTP_USER_AGENT");
        $browser = "An unidentified browser";
        if (preg_match("/MSIE/i", "$viewer")) {
            $browser = "Internet Explorer";
        } else if (preg_match("/Netscape/i", "$viewer")) {
            $browser = "Netscape";
        } else if (preg_match("/Mozilla/i", "$viewer")) {
            $browser = "Mozilla";
        } else {
            $browser = "aaaa";
        }
        $platform = "An unidentified OS!";
        if (preg_match("/Windows/i", "$viewer")) {
            $platform = "Windows!";
        } else if (preg_match("/Linux/i", "$viewer")) {
            $platform = "Linux!";
        }
        echo("You are using $browser on $platform");
        echo "<br>";

        /* random number rand() srand()*/
        echo "yoyo:" . (microtime() * 1000000) . "<br>";
//        srand(microtime() * 1000000);
        $num = rand(1, 4);
        echo "number:$num";
        ?>
    </body>
</html>
