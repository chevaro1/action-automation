<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#echo $cat;
#echo $fil;
#echo $category;
$case = $_GET["case"];
$type = $_GET["type"];

if ($type == "service"){
  $type = "service charge";
} else {
  $type = "ground rent";
}

require_once 'config.php';

$sql = "SELECT id, start_date, value FROM `sheet` WHERE case_number = '$case' AND type = '$type'";
#echo $sql;

$result = mysqli_query($link, $sql);

$arr = [];
$count = 0;

if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr, $row);
        $count += 1;
    }
}
#echo $count;

$jsondata = json_encode($arr);
print $jsondata;
