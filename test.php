<html>
    <body>
        <?php
            $array = array('Scrabble', 'Trivial Persuit');
            $multiArray = array(
                array("4", 3),
                array("9", 1),
                array("1", 2)
            );
        // var_dump($multiArray);
        // echo $multiArray[2][1];
        // $i = 0;
        $ii = 0;
        //     foreach ($multiArray as $value){
        //         echo ($multiArray[$i][0] . "<br>");
        //         $i++;
        //     }
        

        // dit is voor het controleren of er in de gehele multiArray Monopoly in staat (zorgt ervoor dat er geen dubbele artikelen in winkelwagen komt)
            foreach ($multiArray as $value){
                $arrayChecker = (in_array('Monopoly', $multiArray[$ii]));
                $ii++;
            }
            if ($arrayChecker = 1) {
                echo 'Monopoly staat in de $multiArray';
            }
            
            // echo in_array('Scrabble', $array);

        ?>
    </body>
</html>