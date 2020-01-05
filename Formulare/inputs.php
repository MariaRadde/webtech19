<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Inputs</title>
</head>
<body>
<div class="container">
    <h1>Input-Elemente</h1>
<form action="<= $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="form-group">
        <label for="name">type="text":</label>
        <input type="text" name="name">
    </div>
    <div class="form-group">
        <label for="passw">type="password":</label>
        <input type="password" name="passw">
    </div>
    <div class="form-group">
        <label for="email">type="email":</label>
        <input type="email" name="email">
    </div>
    <div class="form-group">
        <label for="url">type="url":</label>
        <input type="url" name="url">
    </div>

    <div class="radio">
        <label><input type="radio" name="anredeR" value="Herr"> type="radio"</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="anredeR" value="Frau" checked="checked"> type="radio"</label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="anredeC" value="Herr"> type="checkbox"</label>
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="anredeC" value="Frau" checked="checked"> type="checkbox"</label>
    </div>

    <div class="form-group">
        <label for="heute">type="date":</label>
        <input type="date" name="heute"/>
    </div>

    <div class="form-group">
        <label for="jetzt">type="datetime-local":</label>
    <input type="datetime-local" name="jetzt"/>
    </div>

    <div class="form-group">
        <label for="month">type="month":</label>
        <input type="month" name="month"/>
    </div>

    <div class="form-group">
        <label for="week">type="week":</label>
        <input type="week" name="week"/>
    </div>

    <div class="form-group">
        <label for="time">type="time":</label>
        <input type="time" name="time"/>
    </div>

    <div class="form-group">
        <label for="number">type="number":</label>
        <input type="number" name="number"  min="1" max="5" />
    </div>

    <div class="form-group">
        <label for="range">type="range":</label>
        <input type="range" name="range" min="0" max="11" />
    </div>

    <div class="form-group">
        <label for="search">type="search":</label>
        <input type="search" name="search"/>
    </div>

    <div class="form-group">
        <label for="file">type="file":</label>
    <input type="file" name="file"/>
    </div>

    <div class="form-group">
        <label for="favcolor">type="color":</label>
    <input type="color" name="favcolor"/>
    </div>

    <div class="form-group">
        <label for="telefon">type="tel":</label>
        <input type="tel" name="telefon"/>
    </div>


    <input type="submit" class="btn btn-primary">
    <input type="reset" class="btn btn-warning">
</form>
</div>
</body>
</html>