<?php
    function html($tag, $paragraph, $class)
    {
        if($class != null)
        {
            return '<' . $tag . ' class="' . $class . '">' . $paragraph . '</' . $tag . '>';
        }
        else{
            return '<' . $tag . '>' . $paragraph . '</' . $tag . '>';
        }
    }

    echo html('p','Paragraph 1', 'red');
    echo html('li','Paragraph 2', '');

?>



<?php
    function diceRoll()
    {
        for($i = 0; $i < 5; $i++)
        {
            $num = rand(1, 6);
            echo '<p>' . 'You rolled a ' . $num . '</p>';  
        }
    }
    diceRoll();

?>

<link rel="stylesheet" href="style.css" />
<?php
    function drawSquare()
    {
        $num = rand(1,10);
        echo '<div class = "square' . $num . '"></div>';
    }
    for($i = 0; $i < 10; $i++)
    {
        drawSquare();
    }
?>