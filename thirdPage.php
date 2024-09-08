<?php

session_start();

if (!isset($_SESSION['thirdPageCounter'])) {
    $_SESSION['thirdPageCounter'] = 0;
}

$_SESSION['thirdPageCounter'] += 1;

if ($_SESSION['thirdPageCounter'] % 3 == 0) {
    header('Location: fourthPage.php');
} else {
    echo "<h1>Третья страница</h1>";

    echo "<span style='font-size: 5rem;'>"
        . $_SESSION['thirdPageCounter']
        . "</span>";
}