<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="num1" placeholder="num1"><br /><br />
        <select name="Operator"><br /><br />
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select><br /><br />
        <input type="text" name="num2" placeholder="num2"><br /><br />
    <button type="submit">Submit</button>
    </form>
    <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operator = $_GET["Operator"];
        $sum = 0;

        if($operator == "+")
            $sum = $num1 + $num2;
        if($operator == "-")
            $sum = $num1 - $num2;
        if($operator == "*")
            $sum = $num1 * $num2;
        if($operator == "/")
            $sum = $num1 / $num2;

        print "$sum"; 
        
        for ($i=2; $i <= $sum / 2; $i++) { 
            if($sum % $i == 0){
                print " is not a prime number!";
                break;
            }
        }

        if ($i > $sum / 2) {
            print " is a prime number!";
        }
    ?>
</body>
</html>
