<?php
require("App\Modelos\Persona.php");

use App\Modelos\Persona as persona;
?>


<!doctype html>
<html lang="en">
<head>
    <title>Persona</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="row">
    <div class="card">
        <div class="card-header">
        </div>

        <div class="card-body">

            <h5 class="card-title">PERSONA</h5>


            <?php
            $Persona1 = new Persona( "Sergio",
                "Patiño",
                "3224650062",
                "Trans 7# 9-124");


            $Persona1->MostrarDatos();

            ?>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


</div>


</body>
</html>
