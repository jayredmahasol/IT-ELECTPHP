<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>

<body>
    <!--
    Create a program that convert the temperature from Fahrenheit to Celcius with remark. Use the table below for the temperature remark.

    -----------------------------------------
    |    Temperature    |       Remark      |
    -----------------------------------------
    |  0 and below      |  Freezing point   |
    -----------------------------------------
    |  100 and above    |  Boiling point    |
    -----------------------------------------
    |  1 to 25          |  Cold             |
    -----------------------------------------
    |  26 to 40         |  Warm             |
    -----------------------------------------
    |  41 to 99         |  Hot              |
    -----------------------------------------

    Fahrenheit to Celcius formula: °C = (°F - 32) × 5/9

    Sample Case #1:
    Fahrenheit: 80

    Celcius: 26.67
    Remarks: Warm

    Sample Case #2:
    Fahrenheit: 200

    Celcius: 93.33
    Remarks: Hot
    -->

    <h1>Exercise 3</h1>
    <form>
        Fahrenheit: <input type="text" name="value"> <button name="convert">Convert</button>
    </form><br /><br />
    <?php

    $value = 0;
    // Do your code here
    if(isset($_GET["value"]))
    {
        $value = $_GET["value"];      
    }

    $celcius = ($value - 32) * 5 / 9;

    // OUTPUT
    if ($value !=0)
    {
        print "Celcius: " . number_format($celcius, 2). "<br>";
        if($celcius <= 0)   
            print("Remark: Freezing Point");
        if($celcius >= 100)
            print("Remark: Boiling Point");
        if($celcius >= 1 && $celcius <= 25)
            print("Remark: Cold");
        if($celcius >= 26 && $celcius <= 40)
            print("Remark: Warm");
        if($celcius >= 41 && $celcius <= 99)
            print("Remark: Hot");
    }
    ?>
</body>

</html>