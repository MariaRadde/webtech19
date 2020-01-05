<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Formulare</title>
</head>
<body>
<div class="container-fluid">
<h2>Erstes Formular</h2>
<form action="register.php" method="get">
    <div class="form-group">
        <label for="name" >Name: </label>
        <input type="text" name="name" class="form-control" placeholder="Ihr Name" />
    </div>
    <div class="form-group">
        <label for="email" >E-Mail: </label>
        <input type="email" name="email" class="form-control" placeholder="E-Mail" />
    </div>

    <div class="checkbox">
    <label> <input type="checkbox"> AGBs akzeptieren</label>
    </div>

    <button type="submit" class="btn btn-primary">Anmelden</button>
</form>
</div>
</body>
</html>