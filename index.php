<?php
require 'session.php';

$Session = new Session();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Système d'alert</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
    <?php $Session->flash(); ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Tutoriel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
        </ul>
      </div>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template text-center">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        <div class="col">
          <a href="traitement.php" class="btn btn-primary">Learn More</a>
        </div>
      </div>

    </main><!-- /.container -->

    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
