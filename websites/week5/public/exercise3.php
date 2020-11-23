<?php
    $array = [];
    $array['John'] = '389';
    $array['Kate'] = '012';
    $array['Sue'] = '586';
    $array['Dave'] = '675';
    $array['Jo'] = '434';

    foreach ($array as $key => $value)
    {
        #echo 
        echo '<a href ="exercise3.php?name=' . $key . '">' . $key . '</a><br>';
    }

    if(isset($_GET['name']))
    {
        echo $_GET['name'] . ' is on extension ' . $array[$_GET['name']];
    }
?>