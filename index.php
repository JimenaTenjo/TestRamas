<?php


require("App\Modelos\Carro.php");

use App\Modelos\Carro as vehiculo;


?>


<!doctype html>
<html lang="en">
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

<head>
    <script type="220545a178b8ff0f54dd9f14-text/javascript">
    var host = "startbootstrap.com";
    if ((host == window.location.host) && (window.location.protocol != "https:"))
      window.location.protocol = "https";
  </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Start Bootstrap">
    <meta name="google-site-verification" content="37Tru9bxB3NrqXCt6JT5Vx8wz2AJQ0G4TkC-j8WL3kw">

    <title>
        Bare - Template Preview - Start Bootstrap
    </title>

    <meta name="description" content="">

    <link rel="canonical" href="https://startbootstrap.com/previews/bare/">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-6jHF7Z3XI3fF4XZixAuSu0gGKrXwoX/w3uFPxC56OtjChio7wtTGJWRW53Nhx6Ev" crossorigin="anonymous">

    <link rel="stylesheet" href="/assets/style-template.css">

    <link type="application/atom+xml" rel="alternate" href="https://startbootstrap.com/feed.xml" title="startbootstrap" />
    <script type="220545a178b8ff0f54dd9f14-text/javascript">
  // Google Analytics Tracking Script
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-38417733-17', 'startbootstrap.com');
  ga('send', 'pageview');
</script>
    <meta name='ir-site-verification-token' value='-28223945'>

    <meta property="og:title" content="Bare - Template Preview">
    <meta property="og:site_name" content="Start Bootstrap">
    <meta property="og:type" content="website">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://startbootstrap.com/assets/img/branding/og-start-bootstrap.png">
    <meta property="og:url" content="https://startbootstrap.com/previews/bare/">
    <meta property="og:image:alt" content="Bare - Template Preview">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="https://startbootstrap.com/assets/img/branding/start-bootstrap-logo-500x500.png">
    <meta name="twitter:site" content="@SBootstrap">

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/icons/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/icons/site.webmanifest">
    <link rel="mask-icon" href="/assets/img/icons/safari-pinned-tab.svg" color="#dd3d31">
    <meta name="msapplication-TileColor" content="#dd3d31">
    <meta name="theme-color" content="#ffffff">
    <script type="220545a178b8ff0f54dd9f14-text/javascript" src="//m.servedby-buysellads.com/monetization.js"></script>
</head>
<body class="preview-page">
<div class="preview-bar bg-white fixed-top py-2 border-bottom-primary">
    <div class="container-fluid h-100">
        <div class="row align-items-center justify-content-between h-100">
            <div class="col">
                <i class="fab fa-github text-github small"></i>
                <a class="small" href="https://github.com/BlackrockDigital/startbootstrap-bare">View on GitHub</a>
            </div>
            <div class="col d-none d-lg-block">
                <ul class="nav responsive-toggler justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="desktopToggle" data-toggle="tab" href="#" role="tab" aria-selected="true">
                            <i class="fal fa-desktop"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mobileToggle" data-toggle="tab" href="#" role="tab" aria-selected="false">
                            <i class="fal fa-mobile"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col text-right">
                <a href="https://github.com/BlackrockDigital/startbootstrap-bare/archive/gh-pages.zip" class="btn btn-primary btn-sm mr-2 d-none d-md-inline-block" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send','event','Download','click','Bare')" data-cf-modified-220545a178b8ff0f54dd9f14-="">Free Download</a>
                <a href="https://blackrockdigital.github.io/startbootstrap-bare/" class="btn btn-link btn-sm"><i class="fal fa-times mr-1"></i> Remove Frame</a>
            </div>
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