        <head>
            <title>
                ZT2A
            </title>
            <meta charset "utf-8">
        </head>
        <body>
            <h2>Vitejte na me strance</h2>
            <?PHP echo 3 * 4; ?>
            <br>
            <br>
            <?PHP echo date("H:i:s"); ?>
            <br>
            <br>
            <?PHP echo "Ahoj"; ?>
            <br>
            <br>
            <?PHP echo"<ahref=\"index.php\">Odkaz</a>"; ?>
            <br>
            <br>
            <?PHP
            $a = 3;
            $b = 4;

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
            <?PHP
            $jmeno = "Adam";
            $jmena = array("Adam", "Pavel", "Jirka");
            $produkt ["pocitace"] = array(array("nazev" => "Notebook",
                    "typ" => "Acer",
                    "vaha" => "3",
                    "mnozstvi" => "5"),
                array("nazev" => "Notebook",
                    "typ" => "Asus",
                    "vaha" => "5",
                    "mnozstvi" => "2"));
            $produkt ["sluchatka"] = array("nazev" => "Sluchatka",
                "typ" => "JBL",
                "vaha" => "2",
                "mnozstvi" => "6");
            $produkt ["Herni sluchatka"] = array("nazev" => "Herni sluchatka",
                "typ" => "HyperX",
                "vaha" => "6",
                "mnozstvi" => "9");
            $produkt ["rohliky"] = array("nazev" => "Rohlik",
                "typ" => "Normální",
                "vaha" => "1",
                "mnozstvi" => "7");
            $produkt ["jogurt"] = array(array("nazev" => "Jogurt",
                    "typ" => "cokoládovy",
                    "vaha" => "11",
                    "mnozstvi" => "20"),
                array("nazev" => "Jogurt",
                    "typ" => "vanilkový",
                    "vaha" => "12",
                    "mnozstvi" => "4"));
            $produkt ["Mobil"] = array(array("nazev" => "Mobil",
                    "typ" => "Samsung",
                    "vaha" => "15",
                    "mnozstvi" => "18"),
                array("nazev" => "Mobil",
                    "typ" => "Apple",
                    "vaha" => "19",
                    "mnozstvi" => "9"),
                array("nazev" => "Mobil",
                    "typ" => "Xiaomi",
                    "vaha" => "13",
                    "mnozstvi" => "5"),
                array("nazev" => "Mobil",
                    "typ" => "Asus",
                    "vaha" => "14",
                    "mnozstvi" => "11"));
            $produkt ["piti"] = array(array("nazev" => "Piti",
                    "typ" => "Cola",
                    "vaha" => "22",
                    "mnozstvi" => "50"),
                array("nazev" => "Piti",
                    "typ" => "Sprite",
                    "vaha" => "23",
                    "mnozstvi" => "30"),
                array("nazev" => "Piti",
                    "typ" => "kofola",
                    "vaha" => "1",
                    "mnozstvi" => "40"));
            $produkt ["jidlo"] = array(array("nazev" => "jidlo",
                    "typ" => "Chipsy-solene",
                    "vaha" => "24",
                    "mnozstvi" => "5"),
                array("nazev" => "jidlo",
                    "typ" => "Chipsy-šunka",
                    "vaha" => "25",
                    "mnozstvi" => "8"));
            $produkt ["Projektory"] = array(array("nazev" => "projektory",
                    "typ" => "Epson",
                    "vaha" => "26",
                    "mnozstvi" => "3"),
                array("nazev" => "projektory",
                    "typ" => "Hitachi",
                    "vaha" => "27",
                    "mnozstvi" => "2"));
            $produkt ["Kabel"] = array("nazev" => "Kabel",
                "typ" => "Verbatim",
                "vaha" => "28",
                "mnozstvi" => "9");
            $produkt ["USB"] = array(array("nazev" => "USB",
                    "typ" => "100GB",
                    "vaha" => "29",
                    "mnozstvi" => "5"),
                array("nazev" => "USB",
                    "typ" => "500GB",
                    "vaha" => "30",
                    "mnozstvi" => "4"));


            var_dump($jmeno);
            var_dump($jmena);
            var_dump($produkt);
            ?>
            <br>
            <?PHP
            echo currency(1000000.547, "$", 2);
            echo "<br>";
            echo currency(1500000.789);

            /**
             * pocita cenu
             * @param float $price
             * @param string $currency
             * @param int $precision
             * @return string
             */
            function currency($price, $currency = "EUR", $precision = 2) {
                $price = round($price, $precision);
                $price = number_format($price, $precision) . " ,-" . $currency;

                return $price;
            }
            ?>
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

            echo "<table border=1>";
            $pocet = 1;
            foreach ($jmena as $jmeno) {
                echo"<tr><td>" . $pocet++ . "</td><td>" . $jmeno . "</td></tr>";
            }
            echo "</table><br>";

            //PRÁCE S ŘETĚZCEM
            $jmena = "Jan, jAnA, MARIE;Petr-PAveL";
            var_dump($jmena);
            $jmena = str_replace(" ", ",", $jmena);
            var_dump($jmena);
            $jmena = str_replace(",,", ",", $jmena);
            var_dump($jmena);
            $jmena = str_replace("-", ",", $jmena);
            var_dump($jmena);
            $jmena = str_replace(";", ",", $jmena);
            $jmena = str_replace(",", ", ", $jmena);
            var_dump($jmena);
            $jmena = strtolower($jmena);
            var_dump($jmena);
            $jmena = ucwords($jmena);
            var_dump($jmena);
            $jmena = explode(" ", $jmena);
            echo"<br>";


            echo "<table border=1>";
            $pocet = 1;
            foreach ($jmena as $jmeno) {
                echo"<tr><td>" . $pocet++ . $jmeno . "</td></tr>";
            }
            echo "</table><br>";
            ?>
            <br>


            <?PHP

            //Máme úkol, zabránit vkládání sprostých a vulgárních slov do diskuzního fora.
            //Vytvoř vlastní fci isValid. Bude dostávat dva parametry.
            //První parametr bude věta(String) tak 500 znaků.
            //Druhý parametr bude pole zakázaných slov Ve funkci vytvoř cyklus a projdi pole zakázaných slov
            //V každém průchodu kontroluj přes funkci strpos existenci slova v cyklu. 
            //Na kontrolu použij podmínku.
            //Když bude zakázané slovo existovat, vrať uvnitř cyklu v podmínce return True jinak po ukončení cyku False
            //zavolej funkci přes funkci var_dump(isValid($param1.......));



            /**
             * Vyhledává sprostá slova
             * @author Adam Kubeš
             * @param string $retezec
             * @param array $sprostaSlova
             * @return boolean
             */
            function isValid($retezec, $sprostaSlova) {
                foreach ($sprostaSlova as $slovo) {
                    if (strpos($retezec, $slovo) !== FALSE) {
                        return TRUE;
                    }
                }
                
                return FALSE;
            }

            
            var_dump(isValid("ahoj kurva,jsem fakt moc v prdeli z toho,že nám paní Rumlová dala dneska do zkurvených půl pátý. Měli jsme zkurvenou Ajinu, potom hezky volno pro čuráky, pak debilní počty v matice, potom jsme jak kreténi sedeli ve třídě, a pak už jsme začali dělat na debilním programu, který jsem naštěstí napsal zkurveně dobře. Těd už nás jen čekájí dvě napiču hodiny. Pak už jen domů hezky a vidět ty zkurvený šťastivce, který jdou na den otevřených dveří .Pak jen stihnout 109, metro a pak vlak a konečně budeme zkurvěně doma. ", array("kurva", "zkurven", "napiču", "debiní", "kreténi", "čuráci")));
            
            /**
             * Vyhledává sprostá slov
             * @author Adam Kubeš 
             * @param string $retezec
             * @param array $sprostaSlova
             * @return boolean
             */
            function isValidBetter($retezec, $sprostaSlova) {    
                foreach ($sprostaSlova as $slovo) {
                    if (strpos(" " . $retezec . " ", " " . $slovo . " ") !== FALSE) {
                        return TRUE;
                    }
                }
                
                return FALSE;
            }
            
            var_dump(isValidBetter(" hovna, penis, píča, čurák, kretén", ["hovna, penis, píča, čurák, kretén"]));
            
            /**
             * Vypíše tabulku
             * @author Adam Kubeš
             * @param int $sloupce
             * @param int $radky
             */
            function htmltabulka($sloupce, $radky) {
                echo "<table border=\"1\">";
                for($i= 1; $i <= $radky; $i++){
                    echo"<tr>";
                    for($j = 1;$j <= $sloupce; $j++){
                        echo"<td>" . $i . "-" . $j . "</td>";
                    }
                    echo"</tr>";
                }
                echo"</table>";
            }
            htmltabulka(5, 5);
           
            
            
            ?>
        </body>