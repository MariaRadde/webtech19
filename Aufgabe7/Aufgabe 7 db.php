<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles%207.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <?php

    /* in der folgenden Datei steht mein Passwort für den MySQl-Server
     *  $password = 'meinPasswort';
     *
     */
    require_once('DB.php');

    /* hier wird ein neues Objekt von DB erzeugt
     * erster Parameter ist der Name Ihrer Datenbank (auf dem Studi-Server _IhreMatrNr__mockupdatadb
     * , lokal wahrscheinlich nur mockupdatadb
     * zweiter Parameter ist der MySql-Server (Studi-Server db.f4.htw-berlin.de:3306
     * , lokal wahrscheinlich localhost
     * dritter Parameter ist Ihr Nutzername (vom MySQL-Server) (Studi-Server Ihr FB4-Account
     * , lokal wahrscheinlich root
     * vierter Parameter ist Ihr Passwort (ich habe mein Passwort als Wert der Variablen $password
     * in der Datei passwd.inc.pwd abgelegt (siehe oben)
     */
    $dbh = new DB('_s0568898__mockupdatadb', 'db.f4.htw-berlin.de:3306 ', 's0568898');

    /* die folgende Funktion ist nur eine Hilfsfunktion zum Debuggen
     * auf der Konsole in den Entwicklertools Ihres Browsers erscheint
     * der als String übergebene Text
     * die Funktion kann auch gelöscht werden
     */
    function debug_to_console($data)
    {

        if (is_array($data))
            $output = "<script>console.log( 'Debug Objects: " . implode(',', $data) . "' );</script>";
        else
            $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

        echo $output;
    }

    ?>
</head>
<body>
<?php
$form_header = 'Teilnehmerin hinzufügen';

if ($_GET) {
    /*
     * es empfiehlt sich, an Ihre URL bei Absenden des Formulars ein "command" als Schlüssel anzuhängen,
     * welcher die Werte "edit" oder "delete" annehmen kann, je nachdem, ob Sie einen Datensatz
     * ändern oder löschen möchten
     * An den einzelnen "Karteikarten" erscheinen edit- und delete-"Buttons" - s.u.
     */
    $command = $_GET['command'];

    if(isset($command)) {
        // hier unterscheiden wir alle commands
        if($command === 'edit') {
            // editieren
            if(isset($_GET['id'])){
                $teilnehmerinToEdit = $dbh->get($_GET['id']);
            }
        }
        elseif ($command === 'delete') {
            // löschen
            if(isset($_GET['id'])){
                $dbh->delete($_GET['id']);
                $message = 'TeilnehmerIn gelöscht.';
            }
        }
    }

} elseif ($_POST) {
    /*
     * hier werden die über das Formular gesendeten Daten ausgewertet
     * 2 Fälle: wird die id mitgesendet, dienen die übersendeten Daten der Änderung des
     * entsprechenden Datensatzes
     * wird die id nicht mitgeliefert, dienen die Daten dem Einfügen eines neuen Datensatzes
     * in die Datenbank
     */
    if(empty($_POST['id'])) {
        // Hinzufügen
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $ip = $_POST['ip'];
        $dbh->add(array($firstname, $lastname, $email, $ip));
        $message = 'TeilnehmerIn '.$firstname.' '.$lastname.' hinzugefügt.';
    } else {
        // Editieren
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $ip = $_POST['ip'];
        $dbh->edit(array($firstname, $lastname, $email, $ip, $id));
        $message = 'TeilnehmerIn '.$firstname.' '.$lastname.' geändert.';
    }
}
// die folgenden drei Zeilen sind zum Testen --> können Sie jeweils auskommentieren, um zu testen
// $dbh->edit(array("Jan", "Justermann", "jan@justermann", "6789", 51));
// $dbh->add(array("Max", "Mustermann", "max@mustermann.de", "1234"));
// $dbh->delete(51);
$teilnehmerinnen = $dbh->all();
?>
<div class="container">
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title"><?= $form_header ?></h3>
        </div>

        <div class="panel-body">

            <?php if (isset($message)) : ?>
                <div class="alert alert-success">
                    <?= $message ?>
                </div>
            <?php endif; ?>

            <?php if (isset($command) && $command == 'edit') : ?>

                <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <!--
                         dies ist das Formular für die Änderung eines Datensatzes
                         es beinhaltet 4 einzeilige Textfelder: für Vornmae, Name, E-Mail-Adresse und IP-Nummer
                         beachten Sie: das Formular soll auch die id weitergeben (hidden-Textfeld)
                         beachten Sie: die Textfelder sind mit dem Datensatz, der editiert werden soll, vorausgefüllt
                    -->
                    <input type="hidden" name="id" value="<?= $teilnehmerinToEdit['id'] ?>">
                    <input type="text" name="firstname" class="form-control" placeholder="Vorname" value="<?= $teilnehmerinToEdit['vorname'] ?>">
                    <input type="text" name="lastname" class="form-control" placeholder="Nachname" value="<?= $teilnehmerinToEdit['nachname'] ?>">
                    <input type="text" name="email" class="form-control" placeholder="E-Mail" value="<?= $teilnehmerinToEdit['email'] ?>">
                    <input type="text" name="ip" class="form-control" value="<?= $teilnehmerinToEdit['ipnr'] ?>" readonly>
                    <button type="submit" class="btn btn-success">Speichern</button>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"><button type="submit" class="btn btn-secondary">Abbrechen</button></a>
                </form>

            <?php else : ?>
                <div class="row">
                    <div class="col-xs-12">
                        <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <!--
                                 dies ist das Formular für das Anlegen eines neuen Datensatzes
                                 es beinhaltet 4 einzeilige Textfelder: für Vornmae, Name, E-Mail-Adresse und IP-Nummer
                                 keine id - diese wird von der Datenbank selbständig erzeugt (auto inkrement)
                            -->
                            <input type="text" name="firstname" class="form-control" placeholder="Vorname">
                            <input type="text" name="lastname" class="form-control" placeholder="Nachname">
                            <input type="email" name="email" class="form-control" placeholder="E-Mail">
                            <input type="text" name="ip" class="form-control" value="<?= $_SERVER['REMOTE_ADDR'] ?>" readonly>
                            <button type="submit" class="btn btn-success">Speichern</button>
                        </form>
                    </div>
                </div>
            <?php endif; ?>

        </div> <!-- / .panel-body -->
    </div> <!-- / .panel -->

    <div class="row">

        <?php
        if (!sizeof($teilnehmerinnen)) {
            echo '<div class="alert alert-info">Es sind keine Studentinnen angemeldet!</div>';
        } else {
            foreach ($teilnehmerinnen as $teilnehmerin) // $teilnehmerin = $dbh->get(6);
            {
                echo
                    '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                     <div class="thumbnail">
                        <p> ' . $teilnehmerin["vorname"] . ' </p>
      					   <h4> ' . $teilnehmerin["nachname"] . ' </h4>
      		 			   <p> ' . $teilnehmerin["email"] . ' </p>
      					   <p> ' . $teilnehmerin["ipnr"] . ' </p>
                        <div class="buttons-edit">
                           <a class="btn btn-primary btn-sm" href="aufgabe7.php?command=edit&id=' . $teilnehmerin["id"] . '"><i class="fas fa-user-edit"></i> Edit</a>
                           <a class="btn btn-danger btn-sm" href="aufgabe7.php?command=delete&id=' . $teilnehmerin["id"] . '"><i class="fas fa-trash"></i> Delete</a>
                        </div>
                     </div>
                  </div>';
            }
        }
        ?>

    </div>
</div>
</body>
</html>