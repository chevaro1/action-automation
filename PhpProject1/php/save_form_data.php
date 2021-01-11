<?php
session_start();

$ref_reg_owner = $_POST['ref_reg_owner'];
$ref_address = $_POST['ref_address'];
$ref_lease = $_POST['ref_lease'];
$ref_rtm = $_POST['ref_rtm'];
$ref_rent = $_POST['ref_rent'];
$ref_service_charges = $_POST['ref_service_charges'];
$notes_service_charges = $_POST['notes_service_charges'];
$ref_interest = $_POST['ref_interest'];
$notes_interest = $_POST['notes_interest'];
$ref_costs = $_POST['ref_costs'];
$notes_costs = $_POST['notes_costs'];
$ref_forfeiture = $_POST['ref_forfeiture'];
$ref_lender = $_POST['ref_lender'];
$notes_lender = $_POST['notes_lender'];
$ref_correspondence_address = $_POST['ref_correspondence_address'];
$ref_reminders = $_POST['ref_reminders'];
$notes_reminders = $_POST['notes_reminders'];



$_SESSION['ref_reg_owner'] = ref_reg_owner;
$_SESSION['ref_address'] = ref_address;
$_SESSION['ref_addref_leaseress'] = ref_lease;
$_SESSION['ref_rtm'] = ref_rtm;
$_SESSION['ref_rent'] = ref_rent;
$_SESSION['ref_service_charges'] = ref_service_charges;
$_SESSION['notes_service_charges'] = notes_service_charges;
$_SESSION['ref_interest'] = ref_interest;
$_SESSION['notes_interest'] = notes_interest;
$_SESSION['ref_costs'] = ref_costs;
$_SESSION['notes_costs'] = notes_costs;
$_SESSION['ref_forfeiture'] = ref_forfeiture;
$_SESSION['ref_lender'] = ref_lender;
$_SESSION['notes_lender'] = notes_lender;
$_SESSION['ref_correspondence_address'] = ref_correspondence_address;
$_SESSION['ref_reminders'] = ref_reminders;
$_SESSION['notes_reminders'] = notes_reminders;
















 ?>
