<?php
    $array = [];
    $array[0] = 'rock';
    $array[1] = 'paper'; 
    $array[2] = 'scissors';
    $computerChoice = rand(0, 2);
    
    foreach ($array as $key)
    {
        echo '<a href="rockPaperScissors.php?name=' . $key . '">' . $key . '</a><br>';
    }
    
    if(isset($_GET['name']))
    {
        if($_GET['name'] == $array[$computerChoice])
        {
            echo '<p>' . 'You chose ' . $_GET['name'] . '. The computer chose ' . $array[$computerChoice] . '. It is a tie' . '</p>';
        }
        else if($_GET['name'] == $array[0] && $array[$_GET['name']]  == $array[1] ||
        $_GET['name'] == $key && $array[$_GET['name']]  == $key ||
        $_GET['name'] == $key && $array[$_GET['name']]  == $key)
                {
                    echo '<p>' . 'You chose ' . $_GET['name'] . '. The computer chose ' . $array[$computerChoice]  . '. You lost' . '</p>';
                }
        else {
            echo '<p>' . 'You chose ' . $_GET['name'] . '. The computer chose ' . $array[$computerChoice]  . '. You won' . '</p>';
        }
    }
?>