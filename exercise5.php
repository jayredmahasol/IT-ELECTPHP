<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
       Starting Number: <input type="text" name="num1" placeholder="num1"><br /><br />
       Ending Number: <input type="text" name="num2" placeholder="num2"><br /><br />
    <button type="submit">Display</button>
    </form>
    <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        ?>
        <br>
        <br>
        <?php print "Starting number: $num1"; ?> <br>
        <br> 
        <?php print "Ending number: $num2"; ?> <br> <?php

        function isPrime($number) {

            if($number < 2)
                return false;
            for($i =2; $i <= sqrt($number); $i++){
                if($number % $i ==0)
                    return false;
            }
            return true;
        }        

        if($num1 <= $num2)
        {
            
            print "<br>Odd numbers: ";
            for($i = $num1; $i <= $num2; $i++)
            {
                if($i % 2 != 0)
                    print "$i " ;
            } 
            


            print "<br><br>Even numbers: ";
            for($i = $num1; $i <= $num2; $i++)
            {
                if($i % 2 == 0)
                    print "$i " ;
            }
            ?><br><br><?php


            print "Divisible by 3 Numbers: ";
            for($i = $num1; $i <= $num2; $i++)
            {
                if($i % 3 == 0)
                    print "$i " ;
            }
            ?><br><br><?php

            print "Divisible by 5 Numbers: ";
            for($i = $num1; $i <= $num2; $i++)
            {
                if($i % 5 == 0)
                    print "$i " ;
            }
            ?><br><br><?php

            print "Prime numbers: ";
            for ($i = $num1; $i <= $num2; $i++) {
                if (isPrime($i))
                    print "$i ";
            }
        }
        elseif($num1 >= $num2)
        {
            print "<br>Odd numbers: ";
            for($i = $num1; $i >= $num2; $i--)
            {
                if($i % 2 != 0)
                    print "$i " ;
            } 
            ?><br><br><?php
            
            print "Even numbers: ";
            for($i = $num1; $i >= $num2; $i--)
            {
                if($i % 2 == 0)
                    print "$i " ;
            }
            ?><br><br><?php

            print "Divisible by 3 Numbers: ";
            for($i = $num1; $i >= $num2; $i--)
            {
                if($i % 3 == 0)
                    print "$i " ;
            }
            ?><br><br><?php

            print "Divisible by 5 Numbers: ";
            for($i = $num1   ; $i >= $num2; $i--)
            {
                if($i % 5 == 0)
                    print "$i " ;
            }

            print "<br><br>Prime numbers: ";
            for ($i = $num1; $i >= $num2; $i--) {
                if (isPrime($i))
                    print "$i ";
            }
        }
        
    ?>
</body>
</html>
