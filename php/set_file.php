<?php
session_start();

$case = $_GET['case'];

$_SESSION["case"] = $case;
