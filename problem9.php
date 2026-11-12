<?php
$tests = array(1, "tariq", 1.5, true, 7, 's', false);

// Using for
echo "--- for ---<br>";
for ($i = 0; $i < count($tests); $i++) {
    if (is_bool($tests[$i])) {
        echo $tests[$i] ? "Yes" : "No";
    } else {
        echo $tests[$i];
    }
    echo "<br>";
}

// Using while
echo "--- while ---<br>";
$i = 0;
while ($i < count($tests)) {
    if (is_bool($tests[$i])) {
        echo $tests[$i] ? "Yes" : "No";
    } else {
        echo $tests[$i];
    }
    echo "<br>";
    $i++;
}