<!DOCTYPE html>
<html lang="de" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Klausur 2017</title>
    <style>
        html {
            position: relative; /* sticky footer */
            min-height: 100%;
        }
        header {
            background-color: #f5f5f5;
            width: 100%;
            height: 80px;
            text-align: center;
        }

        strong {
            color: #A9A9A9;
        }

        footer {
            position: absolute;
            bottom: 0px;
            height: 60px;
            width: 100%;
            background-color: #f5f5f5;
            text-align: center;
        }

        footer > a, footer > a:hover, footer > a:link, footer > a:visited {
            color: #A9A9A9;


    </style>

    <header>
        <h1><strong>Ein Spiel</strong></h1>
    </header>

</head>

<div class="container-fluid">
    <div class="row">
        <div class=" col-12 col-sm-6 col-md-6 ">
            <button class="btn btn-primary" id="but1" type="submit" width="100%"
                    style="background-color: #238cff; color: white; width: 70%"
            >Datei laden
            </button>
            <p><h4>Original:</h4></p>
            <!--label for="textarea">Original:</label>-->
            <textarea id="textarea" placeholder="Text..." rows="15" cols="50"></textarea>

            <div class="button-group">
                <button class="btn btn-primary" id="but2" type="submit"
                        style="background-color: red; color:white;width:35%"
                > Kopieren
                </button>
                <button class="btn btn-primary" id="but3" type="submit"
                        style="background-color:#238cff; color: white; width:35%"
                >Text speichern
                </button>
            </div>
            <h4>Suchbegriffe:</h4>
            <div class="inhalt" style="visibility: hidden"> Soll hidden sein</div>
        </div>
        <div class="col-12 col-sm-6 col-md-6  ">
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Suche..." name="search" style="width: 90%">
                    <button type="submit"><i class="fa fa-search"></i>Search</button>
                </form>
                <p><h4>Kopie:</h4></p>
                <div class="container">
                    <div class="card card-body " style="background-color: lightgrey"></div>
                </div>

            </div>
            <p></p>

        </div>


    </div>


</div>




<footer>
    <a href="webtech.f4.htw-berlin.de/" style="text-decoration: none;">Maria Radde</a>


</footer>

</body>
</html>

