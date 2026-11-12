<?php
$films   = array("Fast", "Predestination", "Persuit", "Prestige");
$keyword = "avatar";
$found   = false;

foreach ($films as $film) {
    if ($film == $keyword) {
        $found = true;
        break;
    }
}

echo $found ? "yes" : "no";