<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="home">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">

    <title><?= $title;?></title>
  </head>
  <body>

  <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url();?>"><b>Bankumtest</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark"><p class="text-primary"><img src="<?= base_url();?>assets/img/more_white.png" width="25" height="25" alt="more"></p></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">

                    <!-- home -->
                    <a class="nav-item nav-link text-white" href="<?= base_url();?>auth/dashboard">Dashboard</a>
                    <a class="nav-item nav-link text-white" href="<?= base_url();?>auth/post">Post</a>
                    <a class="nav-item nav-link text-white" href="<?= base_url();?>auth/term">Term & Agreement</a>

                </div>
            </div>
        </div>
    </nav>