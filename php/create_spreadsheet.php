<?php

$caseno = $_POST["caseno"];

shell_exec("python3 /home/william/github/create-tex/create_spreadsheet.py $caseno");

shell_exec("python3 /home/william/github/create-tex/make_tex.py $caseno");

shell_exec("latex2rtf /home/william/github/create-tex/declaration/$caseno/main.tex");

shell_exec("latex2rtf /home/william/github/create-tex/loc/$caseno/main.tex");

echo "1";
