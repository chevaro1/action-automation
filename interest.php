<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
 if (isset($_SESSION["case"])){
   $id = $_SESSION["id"];
   $case = $_SESSION["case"];
   error_log($case);
 }
 #$case = "4";
 #$_SESSION['case'] = "4";
include 'blocks/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document Automation</title>
    <?php include 'blocks/head.php' ?>
    <script> var case_no = "<?php echo $case ?>"</script>
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
<div class="container mx-auto">
  <div class="row">
      <h1>Service Charges:</h1>
  </div>
<hr>
</div>
<div class="container">
  <div id="example-table"></div>
</div>

<div class="container">
  <div class="row mt-3 mx-auto">
      <h1>Ground Rent:</h1>
  </div>
<hr>
</div>
<div class="container">
  <div id="example-table2"></div>
</div>
<div class="container mx-auto">
  <hr>
  <div class="row">
    <div class="col text-center">
      <button type="button" id="submit" class="btn-lg btn-success">Submit</button>
    </div>
  </div>
<hr>
</div>

</div>

<div class="jumbotron text-center" style="margin-bottom:0; margin-top:25px">
  <p>Footer</p>
</div>

</body>

<script src="scripts/interest.js"></script>
</html>
