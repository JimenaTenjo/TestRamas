<?php


require("App\Modelos\Carro.php");

use App\Modelos\Carro as vehiculo;


?>


<!doctype html>
<html lang="en">
<head>


        </div>
    </div>
</div>
<iframe class="iframe-preview" width="100%" src="https://blackrockdigital.github.io/startbootstrap-bare/"></iframe>
<script id="dsq-count-scr" src="//startbootstrap.disqus.com/count.js" async type="220545a178b8ff0f54dd9f14-text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" type="220545a178b8ff0f54dd9f14-text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous" type="220545a178b8ff0f54dd9f14-text/javascript"></script>
<script type="220545a178b8ff0f54dd9f14-text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="220545a178b8ff0f54dd9f14-text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="/assets/js/scripts.js" type="220545a178b8ff0f54dd9f14-text/javascript"></script>
<script type="220545a178b8ff0f54dd9f14-text/javascript">
    $("#desktopToggle").on('click', function(e) {
      e.preventDefault();
      $(".iframe-preview").removeClass("iframe-preview-mobile");
    });
    $("#mobileToggle").on('click', function(e) {
      e.preventDefault();
      $(".iframe-preview").addClass("iframe-preview-mobile");
    });
  </script>

<head>
    <title>Carro</title>
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
            <h5>Carro</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <?php
            $vehiculo1 = new vehiculo("BMW",
                "i3",
                "Automovil",
                "Negro"
            );
            $vehiculo1->MostrarDatos();
            ?>

            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


    <div class="col-xs-1-12">
        <div class="card">
            <div class="card-header">
                <h5>Carro</h5>

            </div>
            <div class="card-body">
                <h3 class="card-title"></h3>
                <p class="card-text"></p>
                <?php
                $vehiculo2 = new Vehiculo("Chevrolet", "Aveo", "Automovil", "Gris");
                $vehiculo2->MostrarDatos();
                ?>

            </div>
        </div>
    </div>

</div>
</body>




<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="220545a178b8ff0f54dd9f14-|49" defer=""></script></body>
</html>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
