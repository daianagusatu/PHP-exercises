<?php
    $array = ['tomato', 'cheese', 'cucumber'];
    $count = count($array);
    $total = pow(2, $count);

    for($i = 0; $i<$total; $i++)
    {
        for($j=0; $j < $count; $j++)
        {
            if(pow(2, $j) & $i)
                echo $array[$j] . ' ';
        }
        echo '<br />';
    }


?>