<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Title</title>
    <?php
    require_once "./mockdataarray.php";
    ?> //damit die Inhalte ausgelesen werden
</head>
<body>
<?php
$id= $_GET['id'];
echo $id;
$person=$player[$id];
?> //php damit  inhalte in der Form dargestellt werden
<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               value="<?php echo $person[0]?>" > //Name im Form darstellen SOLL IM INPUT SEIN

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Nachname</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
               value="<?php echo $person[1]?>">//Nachmane anzeigen
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" id="exampleInputPassword1"
               value="<?php echo $person[2]?>"> //email anzeigen
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

    </div>
    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>
</body>

</html>
