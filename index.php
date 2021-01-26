<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'blocks/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document Automation</title>
    <?php include 'blocks/head.php' ?>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Document Automation</h1>
  <p>Home Page</p>
</div>

<?php include "blocks/nav_bar.php" ?>

<div class="container text-center">
  <main role="main" class="inner cover">
      <h1 class="cover-heading">Document Automation Page</h1>
      <p class="lead">Please press the button below to start the process</p>
      <p class="lead">
        <a href="choose_file.php" class="btn btn-lg btn-secondary">Begin</a>
      </p>
    </main>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
