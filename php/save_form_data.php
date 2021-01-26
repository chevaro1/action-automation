<?php
session_start();

$date = date("Y-m-d");

$case_number = $_POST['case_number'];
$ref_reg_owner = $_POST['ref_reg_owner'];
$notes_reg_owner = $_POST['notes_reg_owner'];
$ref_address = $_POST['ref_address'];
$notes_address = $_POST['notes_address'];
$ref_lease = $_POST['ref_lease'];
$notes_lease = $_POST['notes_lease'];
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
$ref_correspondence_address = $_POST['ref_correspondence_address'];
$notes_correspondence_address = $_POST['notes_correspondence_address'];
$ref_reminders = $_POST['ref_reminders'];
$notes_reminders = $_POST['notes_reminders'];


require_once 'config.php';

$sql = "INSERT INTO `lease_information`(`case_number`, `created`, `ref_reg_owner`, `notes_reg_owner`, `ref_address`, `notes_address`,
   `ref_lease`, `notes_lease`, `ref_rtm`, `notes_rtm`, `ref_rent`, `notes_rent`, `ref_service_charges`, `notes_service_charges`, `ref_interest`,
    `notes_interest`, `ref_costs`, `notes_costs`, `ref_forfeiture`, `notes_forfeiture`, `ref_lender`, `notes_lender`, `ref_correspondence_address`,
     `notes_correspondence_address`, `ref_reminders`, `notes_reminders`) VALUES ('$case_number','$date','$ref_reg_owner','$notes_reg_owner','$ref_address',
       '$notes_address','$ref_lease','$notes_lease','$ref_rtm','$notes_rtm','$ref_rent','$notes_rent','$ref_service_charges','$notes_service_charges',
       '$ref_interest','$notes_interest','$ref_costs','$notes_costs','$ref_forfeiture','$notes_forfeiture','$ref_lender','$notes_lender','$ref_correspondence_address',
       '$notes_correspondence_address','$ref_reminders','$notes_reminders')";

echo $sql;

#mysqli_query($link, $sql);
$result = mysqli_query($link, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);
echo $result;





 ?>
