<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$name=$_GET["name"];
$nachname=$_GET["nachname"];
$email=$_GET["email"];
echo $_SERVER["PHP_SELF"];
?>
<ul>
    <li>name=<?php   echo $name; ?> </li>
    <li>nachname=<?php   echo $nachname; ?> </li>
    <li>email=<?php   echo $email; ?> </li>
</ul>
</body>
</html>

