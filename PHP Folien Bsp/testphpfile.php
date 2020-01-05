<!DOCTYPE html>
<html>
<head>
    <meta charset= "utf - 8" />
    <title>Erstes PHP</title>
</head>
<body> <p>Das ist HTML</p> <?php echo "das hier wird geparst und wird dann HTML"; ?> <p>Das ist wieder HTML</p>
</body>
<body>
<?php echo "<p>Jetzt ist es ".date('H:i:s')." Uhr.</p>"; ?> /*macht echo ne unterschied*/?
<p>Jetzt ist es <?php echo date('H:i')?> Uhr.</p> /*ohne sekunden*/
<p>Jetzt ist es <?= date('H:i:s')?> Uhr.</p>


</body>


</html>

