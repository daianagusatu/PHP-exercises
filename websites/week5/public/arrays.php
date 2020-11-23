<ul>
<?php


function showNumber($x)
{
    $arrayNumTen = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];
    $arrayNumTwenty = ['eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
    $arrayNumTens = ['twenty', 'thirty', 'fourty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
    if($x > 0 && $x < 11)
    {
            echo '<li>' . $arrayNumTen[$x-1]. '</li>';
        
    }
    else if($x > 10 && $x < 20)
    {
            echo '<li>' . $arrayNumTwenty[$x-11]. '</li>';
    }
    else if($x > 19 && $x < 100)
    {
        $getSecondDigit = strval($x-21);
        $secondDigit = $getSecondDigit[1];
        $firstDigit = $getSecondDigit[0];
        echo '<li>' . $arrayNumTens[$firstDigit] . $arrayNumTen[$secondDigit] . '</li>';
    }
}

showNumber(84);

?>
</ul>