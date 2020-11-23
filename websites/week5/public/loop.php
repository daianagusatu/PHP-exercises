
<?php
function isEven($x)
{
    if($x % 2 == 0)
    {
        echo '<li>' . $x . ' is an even number' . '</li>';
    }
    else{
        echo '<li>' . $x . ' is not an even number' . '</li>';
    }
}
isEven($_GET['num']);
?>