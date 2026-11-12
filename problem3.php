<?php
function sumarray($arr)
{
    $sum=0;

    foreach($arr as $num)
        {
            $sum += $num;

        }

        return $sum;
}

echo sumarray(array([1,2,3,4,5]));
?>