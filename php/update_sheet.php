<?php

$date = $_POST["date"];
$type = $_POST["type"];
$caseno = $_POST["caseno"];


if ($type == "service"){
  $type = "service charge";
} else {
  $type = "ground rent";
}


require_once 'config.php';

$sql = "UPDATE `sheet` SET `interest`='true' WHERE start_date >= '$date' AND case_number = '$caseno' AND type = '$type'";

echo $sql;

mysqli_query($link, $sql);






 ?>
