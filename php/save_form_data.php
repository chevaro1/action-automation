<?php
session_start();

$date = date("Y-m-d");

$case_number = $_POST['case_number'];
$owner_type = $_POST['owner_type'];
$ref_reg_owner = $_POST['ref_reg_owner'];
$notes_reg_owner = $_POST['notes_reg_owner'];
$ref_reg_owner_2 = $_POST['ref_reg_owner_2'];
$ref_reg_owner_3 = $_POST['ref_reg_owner_3'];
$ref_reg_owner_4 = $_POST['ref_reg_owner_4'];
$ref_address_1 = $_POST['ref_address_1'];
$notes_address_1 = $_POST['notes_address_1'];
$ref_address_2 = $_POST['ref_address_2'];
$notes_address_2 = $_POST['notes_address_2'];
$ref_address_3 = $_POST['ref_address_3'];
$notes_address_3 = $_POST['notes_address_3'];
$ref_address_4 = $_POST['ref_address_4'];
$notes_address_4 = $_POST['notes_address_4'];
$ref_lease = $_POST['ref_lease'];
$notes_lease = $_POST['notes_lease'];
$property_manager = $_POST['property_manager'];
$ref_rtm = $_POST['ref_rtm'];
$notes_rtm = $_POST['notes_rtm'];
$ref_rent = $_POST['ref_rent'];
$notes_rent = $_POST['notes_rent'];
$ref_service_charges = $_POST['ref_service_charges'];
$notes_service_charges = $_POST['notes_service_charges'];
$ref_interest = $_POST['ref_interest'];
$notes_interest = $_POST['notes_interest'];
$ref_costs = $_POST['ref_costs'];
$notes_costs = $_POST['notes_costs'];
$ref_forfeiture = $_POST['ref_forfeiture'];
$notes_forfeiture = $_POST['notes_forfeiture'];
$ref_lender = $_POST['ref_lender'];
$notes_lender = $_POST['notes_lender'];
$ref_lender_address_1 = $_POST['ref_lender_address_1'];
$notes_lender_address_1 = $_POST['notes_lender_address_1'];
$ref_lender_address_2 = $_POST['ref_lender_address_2'];
$notes_lender_address_2 = $_POST['notes_lender_address_2'];
$ref_lender_address_3 = $_POST['ref_lender_address_3'];
$notes_lender_address_3 = $_POST['notes_lender_address_3'];
$ref_lender_address_4 = $_POST['ref_lender_address_4'];
$notes_lender_address_4 = $_POST['notes_lender_address_4'];
$ref_correspondence_address_1 = $_POST['ref_correspondence_address_1'];
$notes_correspondence_address_1 = $_POST['notes_correspondence_address_1'];
$ref_correspondence_address_2 = $_POST['ref_correspondence_address_2'];
$notes_correspondence_address_2 = $_POST['notes_correspondence_address_2'];
$ref_correspondence_address_3 = $_POST['ref_correspondence_address_3'];
$notes_correspondence_address_3 = $_POST['notes_correspondence_address_3'];
$ref_correspondence_address_4 = $_POST['ref_correspondence_address_4'];
$notes_correspondence_address_4 = $_POST['notes_correspondence_address_4'];
$ref_reminders = $_POST['ref_reminders'];
$notes_reminders = $_POST['notes_reminders'];
$email = $_POST['email'];
$title_no = $_POST['title_no'];
$interest_rate = $_POST['interest_rate'];
$costs_price = $_POST['costs_price'];
$send_date = $_POST['send_date'];


$declaration_p1_start = '';
$declaration_lessee = 'lessee';

$loc_payment_required  = '';  #THIS IS BASED OFF OF THE ACCOUNT STATEMENT
$loc_interest_provision = 'false';
$loc_costs_provision = 'false';
$loc_declaration_provision = 'false';
$loc_claim_deadline = mktime(0, 0, 0, date("m")  , date("d")+15, date("Y"));
$loc_outstanding_claims = '';
$loc_forfeiture_1 = '';
$loc_forfeiture_2 = 'empty';
$loc_forfeiture_3 = '';

$loc_borrower = '';
$loc_property = '';
$forfeitureThreeOne = '';

#$ownercount = 0;

if ($send_date == "empty") {
  $send_date = "null";
} else {
  $send_date = "'" . $send_date . "'";
}

if ($ref_rtm == "rtm") {
  $forfeitureThreeOne = "request your landlord serve a notice";
}


if ($ref_address_1 != "empty") {
  $loc_property = $ref_address_1;
}
if ($ref_address_2 != "empty") {
  $loc_property = ', ' . $ref_address_2;
}
if ($ref_address_3 != "empty") {
  $loc_property = ', ' . $ref_address_3;
}
if ($ref_address_4 != "empty") {
  $loc_property = ', ' . $ref_address_4;
}

if ($owner_type == "company" || $ref_reg_owner_2 != "empty" || $ref_reg_owner_3 != "empty" || $ref_reg_owner_4 != "empty") {
  $loc_borrower = $ref_reg_owner;

  if($ref_reg_owner_2 != "empty"){
    $loc_borrower = $loc_borrower . ' and ' . $ref_reg_owner_2;
  }
  if($ref_reg_owner_3 != "empty"){
    $loc_borrower = $loc_borrower . ' and ' . $ref_reg_owner_3;
  }
  if($ref_reg_owner_4 != "empty"){
    $loc_borrower = $loc_borrower . ' and ' . $ref_reg_owner_4;
  }
} else {
    $loc_borrower = $ref_reg_owner;
}

if ($owner_type == "company" || $ref_reg_owner_2 != "empty" || $ref_reg_owner_3 != "empty" || $ref_reg_owner_4 != "empty") {
  $start = "We,";
  $declaration_p1_start = $start . ' ' . $ref_reg_owner;

  if($ref_reg_owner_2 != "empty"){
    $declaration_p1_start = $declaration_p1_start . ' and ' . $ref_reg_owner_2;
  }
  if($ref_reg_owner_3 != "empty"){
    $declaration_p1_start = $declaration_p1_start . ' and ' . $ref_reg_owner_3;
  }
  if($ref_reg_owner_4 != "empty"){
    $declaration_p1_start = $declaration_p1_start . ' and ' . $ref_reg_owner_4;
  }
} else {
  $start = "I,";
  $declaration_p1_start = $start . ' ' . $ref_reg_owner;
}


if ($owner_type == "company" || $ref_reg_owner_2 != "empty" || $ref_reg_owner_3 != "empty" || $ref_reg_owner_4 != "empty") {
  $declaration_lessee = 'lessees';
}


if ($ref_interest != "empty") {
  $loc_interest_provision = "true";
}


if ($ref_costs != "empty") {
  $loc_costs_provision = "true";
}


if ($ref_lender != "empty") {
  $loc_declaration_provision = "true";
}


if ($ref_rent != "empty") {
  $loc_outstanding_claims = 'rent';
  if ($ref_service_charges != "empty") {
    $loc_outstanding_claims = $loc_outstanding_claims . ' and charges';
  }
  if ($ref_interest != "empty") {
    $loc_outstanding_claims = $loc_outstanding_claims . ' and interest';
  }
  if ($ref_costs != "empty") {
    $loc_outstanding_claims = $loc_outstanding_claims . ' and legal costs';
  }

} elseif ($ref_service_charges != "empty") {
  $loc_outstanding_claims = 'charges';
  if ($ref_interest != "empty") {
    $loc_outstanding_claims = $loc_outstanding_claims . ' and interest';
  }
  if ($ref_costs != "empty") {
    $loc_outstanding_claims = $loc_outstanding_claims . ' and legal costs';
  }

} elseif ($ref_interest != "empty") {
  $loc_outstanding_claims = 'interest';
  if ($ref_costs != "empty") {
    $loc_outstanding_claims = $loc_outstanding_claims . ' and legal costs';
  }

} elseif ($ref_costs != "empty")  {
  $loc_outstanding_claims = 'legal costs';
}


if ($property_manager == "rtm" || $property_manager == "manager") {
  $loc_forfeiture_1 = "to request your landlord";
}


if ($property_manager == "rtm" || $property_manager == "manager") {
  $loc_forfeiture_2 = "request your landlord serve a notice";
}


if ($ref_lender != "empty") {
  $loc_forfeiture_3 = 'We shall also \forfeitureThreeOne\ serve a notice of re-entry on your mortgage lender, \forfeitureThreeTwo.';
}

if ($email == "empty") {
  $email = "By post";
} else {
  $email = "By post and email";
}


require_once 'config.php';

#$sql = "INSERT INTO `lease_information`(`case_number`, `created`, `ref_reg_owner`, `notes_reg_owner`, `ref_address`, `notes_address`,
#   `ref_lease`, `notes_lease`, `ref_rtm`, `notes_rtm`, `ref_rent`, `notes_rent`, `ref_service_charges`, `notes_service_charges`, `ref_interest`,
#    `notes_interest`, `ref_costs`, `notes_costs`, `ref_forfeiture`, `notes_forfeiture`, `ref_lender`, `notes_lender`, `ref_correspondence_address`,
#     `notes_correspondence_address`, `ref_reminders`, `notes_reminders`) VALUES ('$case_number','$date','$ref_reg_owner','$notes_reg_owner','$ref_address',
#       '$notes_address','$ref_lease','$notes_lease','$ref_rtm','$notes_rtm','$ref_rent','$notes_rent','$ref_service_charges','$notes_service_charges',
#       '$ref_interest','$notes_interest','$ref_costs','$notes_costs','$ref_forfeiture','$notes_forfeiture','$ref_lender','$notes_lender','$ref_correspondence_address',
#       '$notes_correspondence_address','$ref_reminders','$notes_reminders') ON DUPLICATE KEY UPDATE created= '$date', ref_reg_owner='$ref_reg_owner',
#       notes_reg_owner= '$notes_reg_owner', ref_address= '$ref_address', notes_address= '$notes_address', ref_lease= '$ref_lease', notes_lease= '$notes_lease',
#       ref_rtm= '$ref_rtm', notes_rtm= '$notes_rtm', ref_rent= '$ref_rent', notes_rent= '$notes_rent', ref_service_charges= '$ref_service_charges',
#       notes_service_charges= '$notes_service_charges', ref_interest= '$ref_interest', notes_interest= '$notes_interest', ref_costs= '$ref_costs',
#       notes_costs= '$notes_costs', ref_forfeiture= '$ref_forfeiture', notes_forfeiture= '$notes_forfeiture', ref_lender= '$ref_lender',
#       notes_lender= '$notes_lender', ref_correspondence_address= '$ref_correspondence_address', notes_correspondence_address= '$notes_correspondence_address',
#       ref_reminders= '$ref_reminders', notes_reminders= '$notes_reminders'";

$sql = "INSERT INTO `lease_information`(
        `case_number`,
        `created`,
        `owner_type`,
        `ref_reg_owner`,
        `notes_reg_owner`,
        `ref_reg_owner_2`,
        `ref_reg_owner_3`,
        `ref_reg_owner_4`,
        `ref_address_1`,
        `notes_address_1`,
        `ref_address_2`,
        `notes_address_2`,
        `ref_address_3`,
        `notes_address_3`,
        `ref_address_4`,
        `notes_address_4`,
        `ref_lease`,
        `notes_lease`,
        `property_manager`,
        `ref_rtm`,
        `notes_rtm`,
        `ref_rent`,
        `notes_rent`,
        `ref_service_charges`,
        `notes_service_charges`,
        `ref_interest`,
        `notes_interest`,
        `ref_costs`,
        `notes_costs`,
        `ref_forfeiture`,
        `notes_forfeiture`,
        `ref_lender`,
        `notes_lender`,
        `ref_lender_address_1`,
        `notes_lender_address_1`,
        `ref_lender_address_2`,
        `notes_lender_address_2`,
        `ref_lender_address_3`,
        `notes_lender_address_3`,
        `ref_lender_address_4`,
        `notes_lender_address_4`,
        `ref_correspondence_address_1`,
        `notes_correspondence_address_1`,
        `ref_correspondence_address_2`,
        `notes_correspondence_address_2`,
        `ref_correspondence_address_3`,
        `notes_correspondence_address_3`,
        `ref_correspondence_address_4`,
        `notes_correspondence_address_4`,
        `ref_reminders`,
        `notes_reminders`,
        `email`,
        `declaration_p1_start`,
        `declaration_lessee`,
        `loc_payment_required`,
        `loc_interest_provision`,
        `loc_costs_provision`,
        `loc_declaration_provision`,
        `loc_claim_deadline`,
        `loc_outstanding_claims`,
        `loc_forfeiture_1`,
        `loc_forfeiture_2`,
        `loc_forfeiture_3`,
        `title_no`,
        `interest_rate`,
        `costs_price`,
        `send_date`,
        `loc_borrower`,
        `loc_property`,
        `forfeitureThreeOne`) VALUES(
        '$case_number',
        '$date',
        '$owner_type',
        '$ref_reg_owner',
        '$notes_reg_owner',
        '$ref_reg_owner_2',
        '$ref_reg_owner_3',
        '$ref_reg_owner_4',
        '$ref_address_1',
        '$notes_address_1',
        '$ref_address_2',
        '$notes_address_2',
        '$ref_address_3',
        '$notes_address_3',
        '$ref_address_4',
        '$notes_address_4',
        '$ref_lease',
        '$notes_lease',
        '$property_manager',
        '$ref_rtm',
        '$notes_rtm',
        '$ref_rent',
        '$notes_rent',
        '$ref_service_charges',
        '$notes_service_charges',
        '$ref_interest',
        '$notes_interest',
        '$ref_costs',
        '$notes_costs',
        '$ref_forfeiture',
        '$notes_forfeiture',
        '$ref_lender',
        '$notes_lender',
        '$ref_lender_address_1',
        '$notes_lender_address_1',
        '$ref_lender_address_2',
        '$notes_lender_address_2',
        '$ref_lender_address_3',
        '$notes_lender_address_3',
        '$ref_lender_address_4',
        '$notes_lender_address_4',
        '$ref_correspondence_address_1',
        '$notes_correspondence_address_1',
        '$ref_correspondence_address_2',
        '$notes_correspondence_address_2',
        '$ref_correspondence_address_3',
        '$notes_correspondence_address_3',
        '$ref_correspondence_address_4',
        '$notes_correspondence_address_4',
        '$ref_reminders',
        '$notes_reminders',
        '$email',
        '$declaration_p1_start',
        '$declaration_lessee',
        '$loc_payment_required',
        '$loc_interest_provision',
        '$loc_costs_provision',
        '$loc_declaration_provision',
        '$loc_claim_deadline',
        '$loc_outstanding_claims',
        '$loc_forfeiture_1',
        '$loc_forfeiture_2',
        '$loc_forfeiture_3',
        '$title_no',
        '$interest_rate',
        '$costs_price',
        $send_date,
        '$loc_borrower',
        '$loc_property',
        '$forfeitureThreeOne') ON DUPLICATE KEY UPDATE
        case_number= '$case_number',
        created= '$date',
        owner_type= '$owner_type',
        ref_reg_owner= '$ref_reg_owner',
        notes_reg_owner= '$notes_reg_owner',
        ref_reg_owner_2= '$ref_reg_owner_2',
        ref_reg_owner_3= '$ref_reg_owner_3',
        ref_reg_owner_4= '$ref_reg_owner_4',
        ref_address_1= '$ref_address_1',
        notes_address_1= '$notes_address_1',
        ref_address_2= '$ref_address_2',
        notes_address_2= '$notes_address_2',
        ref_address_3= '$ref_address_3',
        notes_address_3= '$notes_address_3',
        ref_address_4= '$ref_address_4',
        notes_address_4= '$notes_address_4',
        ref_lease= '$ref_lease',
        notes_lease= '$notes_lease',
        property_manager= '$property_manager',
        ref_rtm= '$ref_rtm',
        notes_rtm= '$notes_rtm',
        ref_rent= '$ref_rent',
        notes_rent= '$notes_rent',
        ref_service_charges= '$ref_service_charges',
        notes_service_charges= '$notes_service_charges',
        ref_interest= '$ref_interest',
        notes_interest= '$notes_interest',
        ref_costs= '$ref_costs',
        notes_costs= '$notes_costs',
        ref_forfeiture= '$ref_forfeiture',
        notes_forfeiture= '$notes_forfeiture',
        ref_lender= '$ref_lender',
        notes_lender= '$notes_lender',
        ref_lender_address_1= '$ref_lender_address_1',
        notes_lender_address_1= '$notes_lender_address_1',
        ref_lender_address_2= '$ref_lender_address_2',
        notes_lender_address_2= '$notes_lender_address_2',
        ref_lender_address_3= '$ref_lender_address_3',
        notes_lender_address_3= '$notes_lender_address_3',
        ref_lender_address_4= '$ref_lender_address_4',
        notes_lender_address_4= '$notes_lender_address_4',
        ref_correspondence_address_1= '$ref_correspondence_address_1',
        notes_correspondence_address_1= '$notes_correspondence_address_1',
        ref_correspondence_address_2= '$ref_correspondence_address_2',
        notes_correspondence_address_2= '$notes_correspondence_address_2',
        ref_correspondence_address_3= '$ref_correspondence_address_3',
        notes_correspondence_address_3= '$notes_correspondence_address_3',
        ref_correspondence_address_4= '$ref_correspondence_address_4',
        notes_correspondence_address_4= '$notes_correspondence_address_4',
        ref_reminders= '$ref_reminders',
        notes_reminders= '$notes_reminders',
        email= '$email',
        declaration_p1_start= '$declaration_p1_start',
        declaration_lessee= '$declaration_lessee',
        loc_payment_required= '$loc_payment_required',
        loc_interest_provision= '$loc_interest_provision',
        loc_costs_provision= '$loc_costs_provision',
        loc_declaration_provision= '$loc_declaration_provision',
        loc_claim_deadline= '$loc_claim_deadline',
        loc_outstanding_claims= '$loc_outstanding_claims',
        loc_forfeiture_1= '$loc_forfeiture_1',
        loc_forfeiture_2= '$loc_forfeiture_2',
        loc_forfeiture_3= '$loc_forfeiture_3',
        title_no= '$title_no',
        interest_rate= '$interest_rate',
        costs_price= '$costs_price',
        send_date= $send_date,
        loc_borrower= '$loc_borrower',
        loc_property= '$loc_property',
        forfeitureThreeOne= '$forfeitureThreeOne'";




echo $sql;

mysqli_query($link, $sql);
#$result = mysqli_query($link, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($link), E_USER_ERROR);
#echo $result;





 ?>
