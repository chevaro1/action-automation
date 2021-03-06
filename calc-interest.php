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
    <link href="node_modules/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Document Automation</h1>
  <p>Home Page</p>
</div>

<?php include "blocks/nav_bar.php" ?>

<div class="container">
    <div class="">
        <div id="progressBar" style="height: 130px"></div>
    </div>
</div>
<hr>
<div class="container">
  <div class="row">
      <button type="button" id="add-row" class="btn btn-success mx-1">Add Row</button>
      <button type="button" id="download-csv" class="btn btn-success mx-1">Save to csv</button>
      <button type="button" id="delete-row" class="btn btn-success mx-1">Delete Row</button>
  </div>
<hr>
</div>
<div class="container">
  <div id="example-table"></div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-6">
      <div id="table-2"></div>
    </div>
    <div class="col-sm-6">
      <button type="button" id="add-row" class="btn btn-success mx-1">Submit</button>
    </div>
  </div>
  <div id="table-2"></div>
</div>

</div>

<div class="jumbotron text-center" style="margin-bottom:0; margin-top:25px">
  <p>Footer</p>
</div>

</body>

<script src="scripts/calc-interest.js"></script>
</html>
