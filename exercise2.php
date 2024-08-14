<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>

<body>
    <!-- 
    Sample Case #1
    Num 1: 1
    Num 2: 2
    Num 3: 3
    Num 4: 4

    Lowest Number: 1 - Num 1
    Highest Number: 4 - Num 4

    Sample Case #2
    Num 1: 1
    Num 2: 2
    Num 3: 3
    Num 4: 4

    Lowest Number: 1 - Num 1
    Highest Number: 4 - Num 4
    -->

    <h1>Exercise 2</h1>
    <form action="">
        Num 1 <input type="text" name="num1"><br /><br />
        Num 2 <input type="text" name="num2"><br /><br />
        Num 3 <input type="text" name="num3"><br /><br />
        Num 4 <input type="text" name="num4"><br /><br />
        <button>Display</button>
    </form><br /><br />
    <?php
    // Do your code here

    $numbers = array($_GET["num1"], $_GET["num2"], $_GET["num3"], $_GET["num4"]);

    $min = min($numbers); 
    $minLoc = array_keys($numbers, $min)[0];
    $finMinLoc = 'Num ';
    $finMinLoc .= $minLoc + 1;


    $max = max($numbers);
    $maxLoc = array_keys($numbers, $max)[0];
    $finMaxLoc = 'Num ';
    $finMaxLoc .=  $maxLoc + 1;

    // OUTPUT
    echo "Lowest Number: "  . $min . " - " . $finMinLoc ."<br>";
    echo "Highest Number: " . $max . " - " . $finMaxLoc ;
    
    ?>
</body>

</html>