<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Registrierung</title>
</head>
<body>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Vielen Dank für die Registrierung!
        </div>
        <div class="card-body">
            <h5 class="card-title">Willkommen!</h5>
            <p class="card-text">Ihr Name   : <b><?php echo $_GET["name"]; ?> </b></p>
            <p class="card-text">Ihre E-Mail: <b><?php echo $_GET["email"]; ?></b></p>
            <a href="./erstes.php" class="btn btn-primary">Zurück zum Formular</a>
        </div>
    </div>
</div>
</body>
</html>