<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php $s ='<p><b>Text</b></p>';
echo htmlspecialchars($s);?>
<form action="" method="get">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
               value="" > <!--//Name im Form darstellen SOLL IM INPUT SEIN-->

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Nachname</label>
        <input type="text" class="form-control" name="nachname" id="nachname"
               value=""><!--//Nachmane anzeigen-->
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" name="email" id="email"
               value=""> <!--//email anzeigen-->
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

    </div>
    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>
<?php
if(!empty($_GET))
{
$name=$_GET["name"];
$nachname=$_GET["nachname"];
$email=$_GET["email"];
  echo $name;
  echo $nachname;
  echo $email;
}
echo $_SERVER["PHP_SELF"];
?>

</body>
</html>


