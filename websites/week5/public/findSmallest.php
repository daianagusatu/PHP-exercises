<?php
    $array = [7, 9, 4, 6, 7, 13, 7, 9, 1, 0.4, 5];


    function findSmallest($array)
    {
        $smallestNo = $array[0];
        
        foreach($array as $num)
        {
            if($num < $smallestNo)
            {
                $smallestNo = $num;
            }
        }
        return $smallestNo;
    }

    function findLargest($array)
    {
        $highestNum = $array[0];
        foreach($array as $num)
        {
            if($num > $highestNum)
            {
                $highestNum = $num;
            }
        }
        return $highestNum;
    }

    echo '<p>' . findSmallest($array) . '</p>';
    echo '<p>' . findLargest($array) . '</p>';
?>


<?php
    $arrayNum = $_GET['num'];
    #$arrayNum = explode(',', $array);
    #var_dump($arrayNum);

    function findSmallestNum($arrayNum)
    {
        $smallestNo = $arrayNum[0];
        
        foreach($arrayNum as $num)
        {
            if($num < $smallestNo)
            {
                $smallestNo = $num;
            }
        }
        return $smallestNo;
    }

    function findLargestNum($arrayNum)
    {
        $highestNum = $arrayNum[0];
        foreach($arrayNum as $num)
        {
            if($num > $highestNum)
            {
                $highestNum = $num;
            }
        }
        return $highestNum;
    }

    echo '<p>' . findSmallestNum($arrayNum) . '</p>';
    echo '<p>' . findLargestNum($arrayNum) . '</p>';
?>