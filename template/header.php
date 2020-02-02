<?php
  //include ('/article/config/config.php');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Muzik Kontrol - Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/article/css/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/article/css/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="/article/css/bootstrap/css/fontastic.css">
   
    <link rel="stylesheet" href="/article/css/bootstrap/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/article/css/bootstrap/css/custom.css">
    <!-- js-->
    <script src="/article/js/jquery/jquery.min.js"></script>
    <script src="/article/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="/article/js/script.js"></script>
  </head>
  <body>
        <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="index.php"  class="navbar-brand">Muzik Kontrol</a>
            <!-- Toggle Button--> 
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link active ">Home</a>
              </li>
              <li class="nav-item"><a href="template/article/add.php" class="nav-link ">Ajouter</a>
              </li>
              <li class="nav-item"><a href="view.php" class="nav-link ">Post</a>
              </li>
              <li class="nav-item"><a href="#footer" class="nav-link ">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
 <!--   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home<span class="glyphicon glyphicon-arrow-right"></span></a></li>
    <li class="breadcrumb-item"><a href="add.php">Ajouter<span class="glyphicon glyphicon-arrow-right"></span></a></li>
    <li class="breadcrumb-item active">Post<span class="glyphicon glyphicon-arrow-right"></span></li>
    <li class="breadcrumb-item"><a href="#">Contact</a></li>
  </ol>
</nav>-->
