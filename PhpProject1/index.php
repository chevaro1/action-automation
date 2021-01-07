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
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Document Automation Page</h1>
  <p>Lease information details</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container">
    <div class="col-sm-4">
        <h3>Terms<h3>
    </div>
    <div class="col-sm-4">
        <h3>Reference<h3>
    </div>
    <div class="col-sm-4">
        <h3>Notes<h3>
    </div>
</div>

<div class="container" style="margin-top:30px">
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

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
