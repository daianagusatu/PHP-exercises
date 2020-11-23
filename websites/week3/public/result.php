<?php
for($i = 0; $i < 8; $i++){
    $numRand = rand(1, 6);
    $numRand2 = rand(1, 6);
    
        echo 'You rolled a ';
        echo $numRand;
        echo ' and a ';
        echo $numRand2;

        if($numRand == 6 || $numRand2 == 6){
            echo ', you win!';
            echo '<br>';
    }
        else{
            echo ', you lose.';
            echo '<br>';
    }

    
}
echo '<br><a href="result.php">Roll again</a>';
?>


<?php
    $numRand = rand(1, 6);
    $numRand2 = rand(1, 6);
    $loop = true;
    $counter = 0;
    while($loop === true)
    {
        $counter++;
        echo '<p>' . 'You rolled a ' . $numRand . ' and a ' . $numRand2 . '</p>';
        if($numRand == 6 || $numRand2 == 6)
        {
        break;
        }
    }
    
?>