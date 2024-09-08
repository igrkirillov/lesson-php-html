<?php

session_start();

header('Content-type: text/plain');
header('Content-Disposition: attachment; filename="txt.txt"');

echo $_GET['text'];