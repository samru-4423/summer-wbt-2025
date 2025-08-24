<?php
    echo "--- Rectangle Area Calculation --- <br>";
    $length=8;
    $width=6;
    $area=$length*$width;
    $perimeter= 2 * ($length + $width);
    echo "Length = $length <br>";
    echo "Width = $width <br>";
    echo "Rectangle Area = $area <br>";
    echo "Perimeter = $perimeter <br><br>";
?>

<?php
    echo "--- VAT Calculation --- <br>";
    $amount = 10000;
    $VAT = 0.15 ;
    $vatcal = $amount * $VAT;
    echo "Amount= $amount <br>";
    echo "VAT = 15% <br>";
    echo "Amount after VAT = $vatcal <br><br>";
?>

<?php
    echo "--- Odd Even Check --- <br>";
    $x = 9;
    echo "Given number = $x <br>";
    if($x%2==0){
        echo "$x is even";
    } else {
        echo "$x is odd";
    }
    echo "<br><br>";
?>

<?php
    echo "--- Largest Number Check --- <br>";
    $x = 9;
    $y = 11;
    $z = 2;
    echo "Given number,<br> x = $x <br>";
    echo " y = $y <br>";
    echo " z = $z <br>";
    if($x > $y && $x > $z){
            echo "x is largest";
    } elseif($y > $z) {
        echo "y is largest";
    } else {
        echo "z is largest";
    }
?>

<?php
    echo "<br><br> --- Print all odd numbers between 10 to 100 --- <br>";
    
    for ($x = 10; $x <= 100; $x++){
        if($x%2!=0){
            echo "$x ";
        }
    }
?>

<?php
    echo "<br><br> --- Search an element --- <br>";

    $nums = [10,20,30,40,50,60,70,80,90];
    $search = 50;
    echo "Searching number = $search <br>";
    for($i = 0; $i <= count($nums); $i++){
        if($nums[$i] == $search){
            echo "Number found.";
            break;
        }
    }
    if($nums[$i] != $search){
        echo "Number not found.";
    }
?>

<?php
    echo "<br><br> --- Shapes --- <br>";
    $rows = 3;
    echo "Row entered = $rows <br>";
    for($i = 1; $i <= $rows; ++$i){
        for($j = 1; $j <= $i; ++$j){
            echo "* ";
        }
        echo "<br>";
    }

    for($i = $rows; $i >= 1; --$i){
        for($j = 1; $j <= $i; ++$j){
            echo "$j ";
        }
        echo "<br>";
    }

    $alpha = "A";
    for($i = 1; $i <= $rows; $i++){
        for($j = 1; $j <= $i; $j++){
            echo $alpha, " ";
            $alpha++;
        }
        echo "<br>";
    }
?>