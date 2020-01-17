<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Probeklausur 2 - PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    <style>
        body {
            font-family: Verdana;
        }

        header {
            background-color:lightgray;
            color:darkgray;
            width:100%;
            height:80px;
            font-size:1.2em;
            font-weight:bold;
            text-align:center;
        }

        footer {
            position:absolute;
            bottom:0px;
            background-color:lightgray;
            width:100%;
            height:60px;
            text-align:center;
            padding-top:10px;
        }

        footer a:link, footer a:hover, footer a:visited {
            text-decoration: none;
            color: black;
        }
       .flex{
           display: flex;/*eine linie*/
           flex-wrap: wrap;
        }
        .flex div{
            width:50px;
            height: 50px;
            background-color: #0c5460;
            margin: 5px;
            border: 1px solid black;
        }
    </style>

</head>

<body class="container-fluid">

<header>
    <h1>Probeklausur 2 - PHP</h1>
</header>
<label for="lines">Lines (1-4) </label><input type="text" id="lines">
<p id="error1" style="color: red"></p>
<label for="cols">Cols (4-10) </label><input type="text" id="cols">
<p id="error2" style="color: red"></p>


<div class="form-group row">
    <div class="col-sm-offset-6 col-sm-6 col-md-offset-4 col-md-8">
        <button type="button" id= "btn1" class="btn btn-primary">Weiter</button>
    </div>
</div>
<div class="flex" id="flex">

</div>
<script>
    document.getElementById("btn1").addEventListener("click",handler);


   function  handler()
   {
       document.getElementById("error1").innerHTML="";
       document.getElementById("error2").innerHTML="";
     var lines = parseInt(document.getElementById("lines").value); //parseint damit inhalt wird into INT
     var cols = parseInt(document.getElementById("cols").value); //parseint damit inhalt wird into INT
    //console.log(lines);
       if (lines<1||lines>4)
       {
           console.log("if");
           document.getElementById("error1").innerHTML="Error the number is less than 1 or bigger 4";
            return;
       }

       if(cols<4||cols>10)
       {
           document.getElementById("error2").innerHTML="Error number less 4 or bigger 10";
           return;
       }
      for( i=0;i<cols*lines;i++)
      {
          var newDiv=document.createElement("div");
          document.getElementById("flex").appendChild(newDiv);
      }
      var w = cols*50+(cols*2+cols*10);
      document.getElementById("flex").style.width=w+"px";
   }

</script>

</body>
</html>

