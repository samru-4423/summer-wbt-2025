<?php
    /*$principle = readline("Enter the value of Princilple :");
    $rate = readline("Enter the value of Rate :");
    $time = readline("Enter the value of Time :");*/
    echo ("<strong>---Simple Interest Calculation---</strong> <br>");
    $principle = 80;
    echo ("Principle value : $principle<br>");
    $rate = 20;
    echo ("Rate value : $rate<br>");
    $time = 5;
    echo ("Time value : $time<br>");

    $result = ($principle * $rate * $time)/100 ;
    echo "Simple Interest : $result";
?>

<?php
    echo ("<br><br><strong>---Swapping Numbers---</strong><br>");
    echo ("Before swap : <br>");
    $num1 = 5;
    echo ("Value of 1st number : $num1<br>");
    $num2 = 10;
    echo ("Value of 2nd number : $num2<br>");
    echo ("After swap : <br>");
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    echo ("Value of 1st number : $num1<br>");
    echo ("Value of 2nd number : $num2<br>");
?>

<?php
    echo ("<br><br><strong>---Leap Year Check---</strong><br>");
    $year = 2024;
    echo ("Given year : $year<br>");
    if(($year %4 == 0 && $year %100 != 0) || $year %400 == 0){
        echo ("The year is leap year.");
    }
    else{
        echo ("This year is not leap year.");
    }
?>

<?php
    echo ("<br><br><strong>---Factorial Check---</strong><br>");
    $num = 6;
    $fact = 1;
    echo ("Given number : $num<br>");
    for($i = 1; $i <= $num; $i++){
        $fact *= $i;
    }
    echo ("Factorial of the given number is : $fact");
?>

<?php
    echo ("<br><br><strong>---Prime Number Check---</strong><br>");
    echo ("Prime numbers checking between 1 to 50.<br>");
    echo ("Prime numbers are : ");
    for($num = 2; $num <= 50; $num++){
    $isPrime = true;

    for($i = 2; $i < $num; $i++){
        if($num % $i == 0){
            $isPrime = false;
            break;
        }
    }

    if($isPrime){
        echo $num." ";
        }
    }
?>

<?php
    echo ("<br><br><strong>---Pattern Shapes---</strong><br>");
    echo ("# Pattern 1<br>");
    $rows = 5;
    for($i = $rows; $i >= 1; --$i){
        for($j = 1; $j <= $i; ++$j){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    echo ("# Pattern 2<br>");
    for($i = 1; $i <= 4; ++$i){
        for($j = 1; $j <= $i; ++$j){
            echo "$j ";
        }
        echo "<br>";
    }
    echo "<br>";
    echo ("# Pattern 3<br>");
    $alpha = "A";
    for($i = 1; $i <= 4; $i++){
        for($j = 1; $j <= $i; $j++){
            echo $alpha;
        }
        $alpha++;
        echo "<br>";
    }
?>