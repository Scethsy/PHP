<?php

    $n = 20;
    for ($i = 1; $i <= $n; $i++) {
        if ($i%3 == 0 && $i%5 == 0) { //FizzBuzz
            echo "FizzBuzz <br>";
        } else if ($i%3 == 0) { //Fizz
            echo "<span class="blue-font">Fizz</span> <br>";   
        } else if ($i%5 == 0) { //Buzz
            echo "Buzz <br>";
        } else {
            echo "$i <br>";
        }
    }

    include("./components/studname.php");
?>

<html>
    <link rel="stylesheet" href="./components/global.css" />
</html>
