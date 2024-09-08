<?php

session_start();

echo ""
. "<ul>"
    ."<li><a href='./notFound.php'>notFound.php</a></li><br/>"
    ."<li><a href='./getTextFile.php?text=Hello,World!'>getTextFile.php?text=Hello,World!</a></li><br/>"
    ."<li><a href='./thirdPage.php'>thirdPage.php</a></li><br/>"
    ."<li><a href='./fourthPage.php'>fourthPage.php</a></li>"
. "</ul>";