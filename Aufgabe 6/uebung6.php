<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Aufgabe 6</title>
    <?php
    require_once "./mockdataarray.php";
    ?>
</head>
<body>
<?php
echo "<h3> Tabelle</h3>";
echo '<table class="table table-striped table-hover table-responsive">
<thead> <tr>';

for($i=0; $i<count($player[0]); $i++) //nur die Obere Name der spalten
{
    echo '<th>'.$player[0][$i].'</th>';
}
echo '</tr> </thead> 
<tbody>';
for($i=1; $i<count($player); $i++) //0-50 zeilen
{
    echo '<tr>';
    for($j=0; $j<count($player[$i]); $j++) //0-3 spalten(inhalt)
    {
        if ($j!=3 )
        {
            echo '<td>'.$player[$i][$j].'</td>';
        }
        else
        {
            echo '<td><a href="forward.php?id='.$i.'">'.$player[$i][$j].'</a></td>'; //get-methode manuell erstellen
        }

    }
    echo '</tr>';
}
echo '</tbody> </table>';
?>
</body>
</html>

