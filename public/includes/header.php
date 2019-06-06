<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <?php
    require  '../private/includes/functions.php';
    $database = dbConnect();
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/box.css">
    <link rel="stylesheet" href="css/ajax.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <script>
    function nav_trigger() {
      document.getElementById("navbar").style.background = "rgba(0,0,0,.6)";
}
    </script>


    <title>Trippie Redd - Fanpage</title>
  </head>
  <body onscroll="nav_trigger()">

    <!-- Navigatie -->
    <div id="navbar">
      <div class="nav_left">
        <h3><a href="#index.php">Trippie <span class="red">Redd</span></a></h3>
        <img src="images/1400.png" alt="">
      </div>
      <div class="nav_right">
        <a href="#">About</a>
        <a href="#">News</a>
        <a href="#">Agenda</a>
        <a href="#">Contact</a>
      </div>
    </div>
