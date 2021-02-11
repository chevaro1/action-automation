<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'blocks/logged-in.php';
if (isset($_SESSION["case"])){
  $id = $_SESSION["id"];
  $case = $_SESSION["case"];
  error_log($case);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lease Information Sheet</title>
    <?php include 'blocks/head.php' ?>
    <script> var caseNo = "<?php echo $case ?>"</script>
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
        <fieldset disabled>
            <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend col-4">
                          <span class="input-group-text col-12" id="basic-addon3">Case Number</span>
                        </div>
                        <input type="text" id="case-number" class="form-control col-sm-4" aria-describedby="basic-addon3" onkeypress="return isNumber(event)" >
                    </div>
            </div>
            <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend col-4">
                          <span class="input-group-text col-12" id="basic-addon3">Registered Owner</span>
                        </div>
                        <input type="text" id="ref-reg-owner" class="form-control col-sm-4" aria-describedby="basic-addon3">
                        <input type="text" id="notes-reg-owner" class="form-control col-sm-4" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Address:</span>
                    </div>
                    <!-- <input type="text" id="ref-address" class="form-control col-sm-4" aria-describedby="basic-addon3">
                    <input type="text" id="notes-address" class="form-control col-sm-4" aria-describedby="basic-addon3"> -->
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12 pl-5" id="basic-addon3">Steet</span>
                    </div>
                    <input type="text" id="ref-address" class="form-control col-sm-4" aria-describedby="basic-addon3">
                    <input type="text" id="notes-address" class="form-control col-sm-4" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12 pl-5" id="basic-addon3">Locality</span>
                    </div>
                    <input type="text" id="ref-address" class="form-control col-sm-4" aria-describedby="basic-addon3">
                    <input type="text" id="notes-address" class="form-control col-sm-4" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12 pl-5" id="basic-addon3">Town</span>
                    </div>
                    <input type="text" id="ref-address" class="form-control col-sm-4" aria-describedby="basic-addon3">
                    <input type="text" id="notes-address" class="form-control col-sm-4" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12 pl-5" id="basic-addon3">Post code</span>
                    </div>
                    <input type="text" id="ref-address" class="form-control col-sm-4" aria-describedby="basic-addon3">
                    <input type="text" id="notes-address" class="form-control col-sm-4" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Lease</span>
                    </div>
                    <textarea class="form-control col-sm-4" id="ref-lease" aria-label="With textarea"></textarea>
                    <textarea class="form-control col-sm-4" id="notes-lease" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <!-- <span class="input-group-text col-12" id="basic-addon3">RTM/ Freeholder/ Manager</span> -->
                      <select class="custom-select" id="order">
                        <option selected value="ASC">RTM</option>
                        <option value="DESC">Freeholder</option>
                        <option value="DESC">Manager</option>
                      </select>
                    </div>
                    <input type="text" class="form-control col-sm-4" id="ref-rtm" aria-describedby="basic-addon3">
                    <input type="text" class="form-control col-sm-4" id="notes-rtm" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Rent</span>
                    </div>
                    <input type="text" class="form-control col-sm-4" id="ref-rent" aria-describedby="basic-addon3">
                    <input type="text" class="form-control col-sm-4" id="notes-rent" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend col-4">
                          <span class="input-group-text col-12" id="basic-addon3">Service Charges</span>
                        </div>
                        <input type="text" class="form-control" id="ref-service-charges" aria-describedby="basic-addon3">
                        <input type="text" class="form-control" id="notes-service-charges" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Interest</span>
                    </div>
                    <textarea class="form-control" id="ref-interest" aria-label="With textarea"></textarea>
                    <textarea class="form-control" id="notes-interest" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Costs</span>
                    </div>
                    <textarea class="form-control" id="ref-costs" aria-label="With textarea"></textarea>
                    <textarea class="form-control" id="notes-costs" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Forfeiture</span>
                    </div>
                    <input type="text" class="form-control col-sm-4" id="ref-forfeiture" aria-describedby="basic-addon3">
                    <input type="text" class="form-control col-sm-4" id="notes-forfeiture" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Lender</span>
                    </div>
                    <input type="text" class="form-control" id="ref-lender" aria-describedby="basic-addon3">
                    <input type="text" class="form-control" id="notes-lender" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Correspondence Address</span>
                    </div>
                    <textarea class="form-control col-sm-4" id="ref-correspondence-address" aria-label="With textarea"></textarea>
                    <textarea class="form-control col-sm-4" id="notes-correspondence-address" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-4">
                      <span class="input-group-text col-12" id="basic-addon3">Reminders</span>
                    </div>
                    <input type="text" class="form-control" id="ref-reminders" aria-describedby="basic-addon3">
                    <input type="text" class="form-control" id="notes-reminders" aria-describedby="basic-addon3">
                </div>
            </div>
          </fieldset>
      </form>
    </div>
  </div>
</div>
<div class="container" style="margin-bottom:20px">
    <div class="text-center">
      <button type="button" onclick="edit_form()" class="btn btn-secondary btn-lg">Edit</button>
        <button type="button" onclick="submit_form()" class="btn btn-secondary btn-lg">Submit</button>
    </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

<!-- Modal -->
<div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Incomplete Form Warning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="save_form_data()" class="btn btn-primary">Continue</button>
      </div>
    </div>
  </div>
</div>

<!-- necessary modal -->
<!-- Modal -->
<div class="modal fade" id="necessary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Incomplete Form Warning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-necessary">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<div id="loader-wrapper" style="display: none;">
    <span class="loader"><span class="loader-inner"></span></span>
</div>


</body>
<
</html>
