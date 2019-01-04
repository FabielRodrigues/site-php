<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"    crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/trix/trix.css">
    <link rel="stylesheet" href="/resources/pnotify/pnotify.custom.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>Painel Administrativo da Fabiel Rodrigues!</title>
  </head>
  <body class="d-flex flex-column bg-warning">
    <div id="header">
        <nav class="navbar navbar-dark bg-dark">
            <span>
                <a href="/admin" class="navbar-brand">AdminFR</a>
                <span class="navbar-text">
                    Painel Administrativo do Fabiel Rodrigues
                </span>
            </span>
        </nav>
    </div>
    <div id="main">
        <div class="row justify-content-center">
            <div id="content" class="col-4 align-self-center">
                <?php include $content ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="/resources/pnotify/pnotify.custom.min.js"></script>

    <script>
        <?php flash(); ?>
    </script>
  </body>
</html>
