<?php

$filename = $argv[1];
eval(file_get_contents("$filename.php"));

?>