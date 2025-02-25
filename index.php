<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Hlavný nadpis
    </h1>

    <?php 
        //sem ide php kod
        echo "<p>vypis</p>";
        echo '<h2>vypis2</h2>';
        echo ("<h4>sposob3</h4>");

        $x = 10;
        echo $x;

        $meno = 'Peter';
        echo $meno;
        echo '<br>';

        var_dump($meno);    //vypise udajovy typ premennej a jej dlzku


        $farby = array('cervena', 'modra', 'zelena');   //array je vstavana funkcia na vytvorenie zoznamu
        echo $farby[0];     //vypis prvku s indexom 0 v zozname;


        foreach($farby as $nazov) {         //prejdenie cyklom po zozname
            echo 'Farba'. $nazov. '<br>';   
        }



        $slovnik = array('Peter' => 25,     //vytvorenie slovnika
                        'Jana' => 30,
                        'Adam' => 50);

        foreach($slovnik as $name => $age) {
            echo "$name má $age rokov";         // hoci su lokalne premenne $name a $age napisane ako string, php rozpozna ze to je premenna a nie text a dosadi za ne jednotlive hodnoty
        }


    ?>
</body>
</html>