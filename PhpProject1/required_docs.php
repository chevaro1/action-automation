<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

<div class="container">
    <div class="">
        <div id="progressBar" style="height: 130px"></div>
    </div>
</div>

<div class="container" style="margin-bottom:20px">
    <div class="text-center" style="margin-top:30px">
        <h3>Required Documents</h3>
        <p> Before you continue, you need to have the following documents:</p>
    </div>
    <div class="text-center" style="margin-top:30px">
        <ul class="list-group">
            <li class="list-group-item">An Account Statement</li>
            <li class="list-group-item">A Title Register</li>
            <li class="list-group-item">The Lease</li>
    </div>
</div>    
<div class="container" style="margin-bottom:20px">
    <div class="text-center">
        <button onclick="confirm()" type="button" class="btn btn-secondary btn-lg">Confirm</button>
    </div>
</div>
    
<div class="jumbotron text-center" style="margin-bottom:0; margin-top:25px">
  <p>Footer</p>
</div>

</body>
</html>