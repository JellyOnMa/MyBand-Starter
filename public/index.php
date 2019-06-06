
  <?php include 'includes/header.php'; ?>


    <!-- Navigatie -->
    <div id="navbar">
      <div class="nav_left">
        <h3><a href="index.php">Trippie <span class="red">Redd</span></a></h3>
        <img src="images/1400.png" alt="">
      </div>
      <div class="nav_right">
        <a href="about.php">About</a>
        <a href="#">News</a>
        <a href="#">Agenda</a>
        <a href="#">Contact</a>
      </div>
    </div>

    <!-- header -->
    <div class="header">
      <h3>Trippie <span class="red">Redd</span></h3>
      <p class="quote_header">"big fourteen"</p>
    </div>

    <br><br>
    <div class="main">
      <div class="box_1">
        <?php
        define("RIJ_PER_PAGINA",2);

        // zoeken
        $zoek_keyword = '';
        if(!empty($_POST['search']['keyword'])) {
          $zoek_keyword = $_POST['search']['keyword'];
        }

        $sql = 'SELECT * FROM posts WHERE id = 1';


        // Pagination
        $per_pagina_html = '';
        $pagina = 1;
        $start =  0;
        if(!empty($_POST["page"])) {
          $pagina = $_POST["page"];
          $start = ($pagina-1) * RIJ_PER_PAGINA;
        }
        $limit = " limit " . $start . "," . RIJ_PER_PAGINA;

        // PDO statement
        $pagination_statement = $database->prepare($sql);
        $pagination_statement->bindValue(':keyword', '%' . $zoek_keyword . '%', PDO::PARAM_STR);
        $pagination_statement->execute();


        $query = $sql.$limit;
        $pdo_statement = $database->prepare($query);
        $pdo_statement->bindValue(':keyword', '%' . $zoek_keyword . '%', PDO::PARAM_STR);
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        ?>

            <tbody id='tabel-body'>
              <?php
              if(!empty($result)) {
                foreach($result as $row) {
                  ?>

                    <h3 class="tabel_title"><?php echo $row['titel']; ?></h3>
                    <p class="tabel_text"><?php echo $row['omschrijving']; ?></p>

                  <?php
                }
              }
              ?>

      </div>

      <div class="box_2">
        <div class="box">
          <div class="layer"></div>
          <div class="layer"></div>
          <div class="layer"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>



  </body>
</html>
