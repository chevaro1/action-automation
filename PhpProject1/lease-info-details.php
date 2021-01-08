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
    <title>Lease Information Sheet</title>
    <?php include 'blocks/head.php' ?>
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

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-4 text-center bg-secondary border">
            <h3>Terms<h3>
        </div>
        <div class="col-sm-4 text-center bg-secondary border">
            <h3>Reference<h3>
        </div>
        <div class="col-sm-4 text-center bg-secondary border">
            <h3>Notes<h3>
        </div>
    </div>
</div>

<div class="container" style="margin-top:20px">
  <div class="row">
    <div class="col-sm-12">
      <form>
            <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend col-4">
                          <span class="input-group-text col-12" id="basic-addon3">Registered Owner</span>
                        </div>
                        <input type="text" class="form-control col-sm-4" id="basic-url" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Address</span>
                    </div>
                    <input type="text" class="form-control col-sm-4" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Lease</span>
                    </div>
                    <textarea class="form-control col-sm-4" id="basic-url" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">RTM/ Freeholder/ Manager</span>
                    </div>
                    <input type="text" class="form-control col-sm-4" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Rent</span>
                    </div>
                    <input type="text" class="form-control col-sm-4" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend col-4">
                          <span class="input-group-text col-12" id="basic-addon3">Service Charges</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Interest</span>
                    </div>
                    <textarea class="form-control" id="basic-url" aria-label="With textarea"></textarea>
                    <textarea class="form-control" id="basic-url" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Costs</span>
                    </div>
                    <textarea class="form-control" id="basic-url" aria-label="With textarea"></textarea>
                    <textarea class="form-control" id="basic-url" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Forfeiture</span>
                    </div>
                    <input type="text" class="form-control col-sm-4" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Lender</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Correspondence Address</span>
                    </div>
                    <textarea class="form-control col-sm-4" id="basic-url" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Reminders</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>
      </form>
    </div>
    
  </div>
</div>
    <div class="container" style="margin-bottom:20px">
        <div class="text-center">
            <button type="button" class="btn btn-secondary btn-lg">Submit</button>
        </div>
    </div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
