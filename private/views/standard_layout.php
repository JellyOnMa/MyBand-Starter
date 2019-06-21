<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="ajax.css" type="text/css" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="ajax.js"></script>

    <title>Juice WRLD - Fanpage</title>
  </head>
  <body>

    <!-- Navigatie -->
    <div id="navbar">
      <div class="nav_left">
        <h3><a href="http://25534.hosts2.ma-cloud.nl/myband/public/">Juice <span class="kleur">WRLD</span></a></h3>
      </div>
      <div class="nav_right">
        <a href="http://25534.hosts2.ma-cloud.nl/myband/public/about">About</a>
        <a href="http://25534.hosts2.ma-cloud.nl/myband/public/gallery">gallery</a>
        <a href="http://25534.hosts2.ma-cloud.nl/myband/public/contact">Contact</a>
      </div>
    </div>

   <?php echo $this->section('content')?>


    <footer>
      <p>Website by Jelle Stekelenburg&copy;</p>
    </footer>
  </body>
</html>
