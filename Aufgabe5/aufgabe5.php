<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aufgabe ist 5</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="../styles/Aufgabe5.css" rel="stylesheet" type="text/css"/>

    <?php


    function zufzahl($max, $anzahl, $stellen)
    {

        echo '<table class="table table-striped table-hover table-responsive" id="table"> <tr>';
        echo '<th> Zufallszahlen </th>';

        for($j=1;$j<=$stellen; $j++)
        {
            echo '<th> ersten '. $j .' Stellen </th>';
        }

        echo '</tr> </br>';

        for($i=1; $i<=$anzahl; $i++)
        {
            $zzahl = rand(1,$max);
            $gerundet1 = abschneiden($zzahl,1);
            $gerundet2 = abschneiden($zzahl,2);
            $gerundet3 = abschneiden($zzahl,3);
            $gerundet4 = abschneiden($zzahl,4);
            echo "<tr><td>".$zzahl."</td> <td>".$gerundet1."</td> <td>".$gerundet2."</td> <td>".$gerundet3."</td> <td>".$gerundet4."</td></tr>";
        }
        echo '</table>';
    }

    function abschneiden($zahl,$stellen=2)
    {
        $base = pow(10,$stellen);
        return $zahl - ($zahl % $base);
    }
    ?>

</head>
<body>
<header>
    <h1>Zufallszahlen</h1>
</header>
<div>
    <?php zufzahl(20000, 20, 4); ?>

</div>

</body>
</html>


