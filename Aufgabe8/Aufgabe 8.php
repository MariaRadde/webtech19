<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 10</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>

<body onload='createTable(); document.getElementById("filter").focus();'>
<div class="container-fluid">
    <h1>Formular</h1>

    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label class="control-label col-sm-2">Filter:</label>

            <div class="col-sm-10">
                <input class="form-control" id="filter" type="text" placeholder="Stadt oder Gruendungsjahr" onkeyup="createTable()">
            </div>
        </div>
    </form>

    <div id="links">
    </div>

    <div id="unten">
    </div>
</div>

<script>
    console.log("***im JS");


    function createTable() {
        var staedte = [
            {"jahr": 1237, "stadt": "Berlin", "link": "http://de.wikipedia.org/wiki/Berlin", "bild": "images/berlin.png"},
            {
                "jahr": 1624,
                "stadt": "New York",
                "link": "http://de.wikipedia.org/wiki/New_York_City",
                "bild": "images/newyork.png"
            },
            {
                "jahr": 1252,
                "stadt": "Stockholm",
                "link": "http://de.wikipedia.org/wiki/Stockholm",
                "bild": "images/stockholm.png"
            },
            {"jahr": 852, "stadt": "Madrid", "link": "http://de.wikipedia.org/wiki/Madrid", "bild": "images/madrid.png"},
            {
                "jahr": 1827,
                "stadt": "Bremerhaven",
                "link": "http://de.wikipedia.org/wiki/Bremerhaven",
                "bild": "images/bremerhaven.png"
            },
            {"jahr": 150, "stadt": "Bremen", "link": "http://de.wikipedia.org/wiki/Bremen", "bild": "images/bremen.png"},
            {
                "jahr": 1202,
                "stadt": "Bernau",
                "link": "http://de.wikipedia.org/wiki/Bernau_bei_Berlin",
                "bild": "images/bernau.png"
            },
            {
                "jahr": 929,
                "stadt": "Brandenburg",
                "link": "http://de.wikipedia.org/wiki/Brandenburg_an_der_Havel",
                "bild": "images/brandenburg.png"
            },
            {
                "jahr": 805,
                "stadt": "Magdeburg",
                "link": "http://de.wikipedia.org/wiki/Magdeburg",
                "bild": "images/magdeburg.png"
            },
            {"jahr": 1222, "stadt": "Marburg", "link": "http://de.wikipedia.org/wiki/Marburg", "bild": "images/marburg.png"},
            {
                "jahr": 766,
                "stadt": "Mannheim",
                "link": "http://de.wikipedia.org/wiki/Mannheim",
                "bild": "images/mannheim.png"
            },
            {"jahr": 782, "stadt": "Mainz", "link": "http://de.wikipedia.org/wiki/Mainz", "bild": "images/mainz.png"}
        ];

        var input = document.getElementById('filter').value;		// eingegbene Daten (Formular)
        input = input.charAt(0).toUpperCase() + input.slice(1);
        console.log(input);


        var linkesDiv = document.getElementById('links');
        linkesDiv.innerHTML = "";
        var table = document.createElement('TABLE');
        table.setAttribute('class', 'table table-striped');		// Bootstrap
        var thead = document.createElement('THEAD');
        var tr = document.createElement('TR');
        var th = document.createElement('TH');
        var tbody = document.createElement('TBODY');
        var td = document.createElement('TD');

        var _tr = tr.cloneNode(false);							// Variable für Clone von tr
        var _td = td.cloneNode(false);							// Variable für Clone von td

        //  Spaltenüberschriften
        var _th = th.cloneNode(false);
        var _text = document.createTextNode('Nr');
        _th.appendChild(_text);
        tr.appendChild(_th);

        _th = th.cloneNode(false);
        _text = document.createTextNode('Jahr');
        _th.appendChild(_text);
        tr.appendChild(_th);

        _th = th.cloneNode(false);
        _text = document.createTextNode('Stadt');
        _th.appendChild(_text);
        tr.appendChild(_th);

        _th = th.cloneNode(false);
        _text = document.createTextNode('Link');
        _th.appendChild(_text);
        tr.appendChild(_th);

        _th = th.cloneNode(false);
        _text = document.createTextNode('Bild');
        _th.appendChild(_text);
        tr.appendChild(_th);

        thead.appendChild(tr);			// Spaltenueberschriften an thead hangen
        table.appendChild(thead);		// thead an Tabelle hangen

        // hier muessen jetzt die einzelnen Zeilen in die Tabelle eingelesen werden
        // das JSON-Array muss ausgelesen werden
        // die Eingabe mit dem jeweiligen Gründungsjahr bzw. der jeweiligen Stadt
        // vergleichen
        // wenn match, dann entsprechende Zeile einfügen
        for (i = 0; i < staedte.length; i++) {
            if ((((staedte[i].stadt).substring(0, input.length)) == input) || (staedte[i].jahr.toString().substring(0, input.length) == input)) {
                _tr = tr.cloneNode(false);
                _td = td.cloneNode(false);
                _text = document.createTextNode(((i + 1).toString()));
                _td.appendChild(_text);
                _tr.appendChild(_td);

                _td = td.cloneNode(false);
                _text = document.createTextNode(((staedte[i].jahr).toString()));
                _td.appendChild(_text);
                _tr.appendChild(_td);

                _td = td.cloneNode(false);
                _text = document.createTextNode(staedte[i].stadt);
                _td.appendChild(_text);
                _tr.appendChild(_td);

                _td = td.cloneNode(false);
                _a = document.createElement('A');
                _a.setAttribute('href', staedte[i].link);
                _a.setAttribute('class', 'btn btn-xs btn-success');
                _a.setAttribute('target', '_blank');
                _text = document.createTextNode('Info');
                _a.appendChild(_text);
                _td.appendChild(_a);
                _tr.appendChild(_td);

                _td = td.cloneNode(false);
                _img = document.createElement('IMG');
                _img.setAttribute('src', staedte[i].bild);
                _img.setAttribute('class', 'img-thumbnail');
                _img.setAttribute('alt', staedte[i].stadt);
                _img.setAttribute('width', '50');
                _img.setAttribute('onclick', 'beiClickNachUnten(this)');
                _td.appendChild(_img);
                _tr.appendChild(_td);
            }

            tbody.appendChild(_tr);
        }
        table.appendChild(tbody);

        linkesDiv.appendChild(table);
    }

    // hier noch eine Funktion, die das Bild, auf das geklickt wurde, in
    // das Div "unten" clont
    function beiClickNachUnten(bild) {
        var neu = bild.cloneNode(true);
        neu.style.margin = "5px 10px 5px 10px";
        document.getElementById("unten").appendChild(neu);
    }


</script>
</body>
</html>
