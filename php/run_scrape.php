<?php


$caseno = $_POST["caseno"];
#$caseno = $_SESSION["case"];

$name1 = "/home/william/github/action-automation/upload/$caseno.pdf";
$name2 = "/home/william/github/action-automation/upload/" . $caseno. "s.html";

$output = shell_exec("pdftohtml $name1");

$output = shell_exec("python3 /home/william/github/create-tex/scrape.py $caseno $name2");
















 ?>
