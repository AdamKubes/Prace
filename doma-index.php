<?PHP require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;?>
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

            dump($a + $b);
            dump($a - $b);
            dump($a / $b);
            dump($a * $b);
            dump($a++);
            dump($a--);
            dump($a += $b);
            dump($a -= $b);
            dump($a *= $b);
            dump($a /= $b);
            dump($a == $b);
            dump($a != $b);
            dump($a > $b);
            dump($a < $b);
            dump($a || $b);
            dump($a && $b);
        ?>
        <br>
        <hr>
        <br>
        <?PHP echo "<img src=\"obrazek.jpg\">"; ?>
        <br>
        <hr>
        <br>
        <?PHP echo "\\"; ?>
        <br>
        <hr>
        <br>
        <?PHP
        $AdamKubes1 = 1; 
        $AdamKubes2 = 1; 
             
        if($AdamKubes1){
        echo "Adam Kubes <br>"; }
        if ($AdamKubes1 < $AdamKubes2) {
        echo "Adam <br>" ; 
        } else {
        echo "Kubes <br>";}
        if ($AdamKubes1 == $AdamKubes2){ 
            echo "Adam ";
            if ($AdamKubes1 <= $AdamKubes2){
                echo "Kubes <br>";
            }
        }
        switch ($AdamKubes1) {
            case 0: break;
            case 1: echo "znamka <br>"; break;
            case 2: break;
            case 3: break;
            case 4: break;
            case 5: break;
        }
        $produkty = array(1 =>"minecraft", 2 =>"minecraft", 3 =>"minecraft",4 =>"minecraft",5 =>"minecraft",6 =>"minecraft",7 =>"minecraft",8 =>"minecraft",9 =>"minecraft",10 =>"minecraft");
        dump($produkty);
        $produkty1["hm"] = array( );
        $produkty1["jk"] = array( );
        $produkty1["idk"] = array(
        array('jméno' => 'Adam', 'pohlaví' => 'M', 'druh' => 'beloch', 'povolani' => 'student', 'věk' => 18),
        array('jméno' => 'Marie', 'pohlaví' => 'F', 'druh' => 'beloska', 'povoloani' => 'kucharka', 'věk' => 33),
        array('jméno' => 'Max', 'pohlaví' => 'M', 'druh' => 'beloch', 'povolani' => 'reporter', 'věk' => 39 ),
        array('jméno' => 'Jenda', 'pohlaví' => 'M', 'druh' => 'cernoch', 'povolani' => 'student', 'věk' => 12),
        array('jméno' => 'Tomáš', 'pohlaví' => 'M', 'druh' => 'beloch', 'povolani' => 'kopac', 'věk' => 62),
        array('jméno' => 'Lenovo', 'verze' => 'M', 'druh' => 'pracovni', 'pamet' => '512GB', 'cena' => 4000),
        array('jméno' => 'Acer', 'verze' => 'druha', 'druh' => 'herni', 'pamet' => '1TB', 'cena' => 7000),
        array('jméno' => 'Asus', 'verze' => 'prvni', 'druh' => 'herni', 'pamet' => '1TB', 'cena' => 8000),
        array('jméno' => 'Apple', 'verze' => 'druha', 'druh' => 'pracovni', 'pamet' => '512GB', 'cena' => 90000),
        array('jméno' => 'Dell', 'verze' => 'druha', 'druh' => 'herni', 'pamet' => '512CB', 'cena' => 6000));
        dump($produkty1)  
       ?>
       <br>
       <hr>
       <br>
       <?PHP
       $radekAdamKubes=11;
       $sloupecAdamKubes=17;
       
       echo "<table border=1>";
       for ($i = 0; $i <= $radekAdamKubes; $i++){
           echo "<tr>";
           for ($a = 0; $a <= $sloupecAdamKubes; $a++){
               echo "<td>".$i."-".$a."</td>";
           }
           echo "</tr>";
        }
        echo"</table><br><br><br>";
       ?>
       <br>
       <hr>
       <br>
       <?PHP
         echo"<br>";
            //práce s mat. fcemi
            echo"matematicka funkce<br>";
            $a = "A3C4F";
            $a = hexdec($a);
            echo $a . "<br> log10:<br>";
            $a = 40.5;
            $a = log10($a);
            echo $a . "<br>";
            //PRÁCE S ŘETĚZCEM
            $jmena = "Jan, jAnA, MARIE;Petr-PAveL";
            dump($jmena);
            $jmena = str_replace(" ", ",", $jmena);
            dump($jmena);
            $jmena = str_replace(",,", ",", $jmena);
            dump($jmena);
            $jmena = str_replace("-", ",", $jmena);
            dump($jmena);
            $jmena = str_replace(";", ",", $jmena);
            $jmena = str_replace(",", ", ", $jmena);
            dump($jmena);
            $jmena = strtolower($jmena);
            dump($jmena);
            $jmena = ucwords($jmena);
            dump($jmena);
            $jmena = explode(" ", $jmena);
            echo"<br>";
            //práce s poli
            $pole = array("ok","ok1");
            dump($pole);
            echo sizeof($pole);
       ?>
       <br>
       <hr>
       <br>
       <?PHP
       $i=1;
       foreach($produkty as $produkty){
           echo $i."-".
                   $produkty ."<br>";
       $i++;}
       ?>
       <br>
       <hr>
       <br>
       <?PHP
       //vlastní funkce
                   /**
             * Vypíše tabulku
             * @author Adam Kubeš
             * @param int $znamka
             * @param int $druhaznamka
             */
            function tabulka($znamka, $druhaznamka) {
                echo "<table border=\"1\">";
                for($i= 1; $i <= $znamka; $i++){
                    echo"<tr>";
                    for($j = 1;$j <= $druhaznamka; $j++){
                        echo"<td>" . $i . "-" . $j . "</td>";
                    }
                    echo"</tr>";
                }
                echo"</table>";
            }
            tabulka(2,5 );
       ?>
    </body>

