<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Titel</title>
</head>
<body>
<div class="container-fluid">

        <?php
        $first = true;
        $email = $passw = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $passw = test_input($_POST["passw"]);
            $email = test_input($_POST["email"]);
            if(isset($_POST["email"])) $first = false;
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $passw = test_input($_GET["passw"]);
            $email = test_input($_GET["email"]);
            if(isset($_GET["email"])) $first = false;
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $passw = filter_var($passw, FILTER_SANITIZE_STRING);

        $fehler = "";
        if(!($email)||!($passw))
        {
            $fehler = "<ul class='list-group' style='margin-bottom:10px;'>";
            if (!($email)) {
                $fehler .= "<li class='list-group-item list-group-item-danger'>E-Mail nicht korrekt</li>";
            }
            if (!($passw)) {
                $fehler .= "<li class='list-group-item list-group-item-danger'>Passwort nicht korrekt</li>";
            }
            $fehler .= "</ul>";
        }
        ?>

        <h2 style="margin-top:20px;">Login</h2>
        <?php
        //var_dump($first);
        if($first || empty($fehler)) : ?>
            <p style="background-color: dimgray; color:white; padding:20px;">Geben Sie E-Mail und Passwort ein drücken den Button:     </p>
        <?php else : ?>
            <p style="background-color: darkred; color:white; padding:20px;">Bitte korrigieren Sie folgende Fehler:    </p>
            <?php echo $fehler ?>
        <?php endif; ?>
        <div style="border: 2px solid dimgray; border-radius: 5px; padding:10px;">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="off" >

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" autocomplete="off" <?php if(empty($email)) echo "placeholder='Email'"; else echo "value=$email"; ?> >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passw" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="passw" autocomplete="new-password" <?php if(empty($passw)) echo "placeholder='Password'"; else echo "value=$passw"; ?> >
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in </button>
            </form>

        </div>

</div>
</body>
</html>