<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
unset($_SESSION['id']);
unset($_SESSION['case']);

include 'blocks/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lease Information Sheet</title>
    <?php include 'blocks/head.php' ?>
    <script src="scripts/lease-info.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Lease information details</h1>
  <p>Lease information details</p>
</div>

<?php include "blocks/nav_bar.php" ?>

<div class="container">
    <div class="">
        <div id="progressBar" style="height: 130px"></div>
    </div>
</div>
<hr>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Case Number</th>
          <th scope="col">Creation Date</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody id="table">

      </tbody>
    </table>

  </div>
  <div class="col-md-2">
  </div>

</div>
</body>
</html>

<script src="scripts/choose-files.js"></script>
