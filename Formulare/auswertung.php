<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Titel</title>
</head>
<body>
<div class="container">
    <?php if(empty($_POST)) : ?>
    <h2 style="margin-top:20px;">Radiobutton-Gruppe</h2>
    <p style="background-color: dimgray; color:white; padding:20px;">Bitte treffen Sie eine Auswahl und senden Sie das Formular ab:     </p>
    <div style="border: 2px solid dimgray; border-radius: 5px; padding:10px;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <fieldset class="form-group">
            <legend>Reiseziel</legend>
            <div class="form-check">
                <label class="form-check-label"><input type="radio" name="rziel" value="Gomera" checked="checked"> Gomera</label>
            </div>
            <div class="form-check">
                <label class="form-check-label"><input type="radio" name="rziel" value="Lanzarote" > Lanzarote</label>
            </div>
            <div class="form-check">
                <label class="form-check-label"><input type="radio" name="rziel" value="Fuerteventura" > Fuerteventura</label>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <legend>Unterkunft</legend>
            <div class="form-check">
            <label class="form-check-label"><input type="radio" name="unterkunft" value="Ferienhaus" > Ferienhaus</label>
            </div>
            <div class="form-check">
            <label class="form-check-label"><input type="radio" name="unterkunft" value="Hotel" checked="checked" > Hotel</label>
            </div>
        </fieldset>
            <input type="submit" class="btn btn-primary">
    </form>
    <?php else : ?>
        <h2>Ausgewählte Reise</h2>
        <?php
        echo "Sie möchten also nach ".$_POST['rziel']." in ein ".$_POST['unterkunft']. ".<br />";
        //Bsp: if($_POST['rziel']=="Gomera")
        ?>
    <?php endif; ?>
    </div>
</div>
</body>
</html>