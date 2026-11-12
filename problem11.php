<?php
$arr1 = array('a', 'b', 'c', 'd');
$arr2 = array('c', 'd', 'e', 'f');

$common = array();
foreach ($arr1 as $item1) {
    foreach ($arr2 as $item2) {
        if ($item1 == $item2) {
            $common[] = $item1;
        }
    }
}

echo implode(" - ", $common);