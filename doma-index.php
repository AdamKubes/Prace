 <head>
    <title>
        PHP ukol
    </title>
<meta charset "utf-8">
</head>
    <body>
        <h2>Vitejte na me strance</h2>
        <?PHP echo 3 * 4; ?>
        <br>
        <hr>
        <br>
        <?PHP echo date("H:i:s"); ?>
        <br>
        <hr>
        <br>
        <?PHP print "Ahoj"; ?>
        <br>
        <hr>
        <br>
        <?PHP echo"<a href=\"https://www.seznam.cz\">Odkaz</a>"; ?>
        <br>
        <hr>
        <br>
        <?PHP $odemknuto= true; echo $odemknuto ?>
        <br>
        <hr>
        <br>
        <?PHP echo "řetězec 1 " . "řetězec 2"; ?>
        <br>
        <hr>
        <br>
        <?PHP $cislo=2.54; echo $cislo ?>
        <br>
        <hr>
        <br>
        <?PHP $cislo1=12; echo $cislo1 ?>
        <br>
        <hr>
        <br>
        <?PHP
            $a = 8;
            $b = 5;

            var_dump($a + $b);
            var_dump($a - $b);
            var_dump($a / $b);
            var_dump($a * $b);
            var_dump($a++);
            var_dump($a--);
            var_dump($a += $b);
            var_dump($a -= $b);
            var_dump($a *= $b);
            var_dump($a /= $b);
            var_dump($a == $b);
            var_dump($a != $b);
            var_dump($a > $b);
            var_dump($a < $b);
            var_dump($a || $b);
            var_dump($a && $b);

            /**
             * Promena typ pole
             */
            ?>
        <br>
        <hr>
        <br>
        <?PHP echo "<img src=\"obrazek.jpg\">"; ?>
        <br>
        <hr>
        <br>
        <?PHP echo "\\"; ?>
    </body>

