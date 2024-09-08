<?php

session_start();

if (!isset($_SESSION['thirdPageCounter'])) {
    $_SESSION['thirdPageCounter'] = 0;
}

echo "<h1>Четвёртая страница</h1>";

echo "Третья страница открыта раз: "
    . "<span style='font-size: 5rem;'>"
    . $_SESSION['thirdPageCounter']
    . "</span>";