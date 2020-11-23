<?php
    for($i = 1; $i < 101; $i++)
    {
        echo '<p>' . $i . ' x 9 = ' . $i*9 . '</p>';
    }
?>



<?php
    for($i = 9; $i < 282429536482; $i=9*$i)
    {
        echo '<p>' . $i . '</p>';
    }

?>


<ul>
<?php
$arrayNum = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];

for($i = 0; $i <= 9; $i++)
{
    
    echo '<li>' . $arrayNum[$i] . '</li>';
    
}
?>
</ul>


<?php
for($i = 21; $i < 100; $i=$i+2)
{
    echo '<p>' . $i . '</p>';
}

?>
