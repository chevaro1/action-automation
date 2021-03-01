<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include 'blocks/logged-in.php';
if (isset($_SESSION["case"])){
  $id = $_SESSION["id"];
  $case = $_SESSION["case"];
  error_log($case);
}
#$case = "4";
#$_SESSION['case'] = "4";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document Automation</title>
    <?php include 'blocks/head.php' ?>
    <script> var caseNo = "<?php echo $case ?>"</script>
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
<div class="container py-5 my-5">
  <h2>Please upload the account statement</h2>
</br>
  <input type="file" name="file" id="file">
  <input type="button" id="btn_uploadfile"
     value="Upload"
     onclick="uploadFile();" >
</div>


</div>

<div class="jumbotron text-center" style="margin-bottom:0; margin-top:25px; min-height:100vh">
  <p>Footer</p>
</div>

</body>

<script src="scripts/upload.js"></script>
</html>
