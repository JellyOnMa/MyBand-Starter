<?php $this->layout('standard_layout')?>

  <div class="header"></div>

  <div class="body">
    <h1><?php foreach ( $test as $tests ) { echo $tests['titel'];} ?></h1>
    <p><?php foreach ( $test as $tests ) { echo $tests['omschrijving'];} ?></p>
  </div>
  <br><br><br><br>
