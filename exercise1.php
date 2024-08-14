<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>
    <!-- 
    Options under Employee Status:
    Regular
    Probationary
    Casual

    Salary Rate:
    Regular - 500
    Probationary - 400
    Casual - 300

    Options under Civil Status:
    Single
    Married
    Widow

    Tax Rate:
    Single - 12%
    Probationary - 10%
    Widow - 7% 
    
    Sample Case #1:
    No. of Days Worked: 15
    Employee Status:    Regular
    Civil Status:       Single
    Result:

    Gross Salary:       7,500.00
    Tax:                12%
    Deduction:          900.00
    Net Salary:         6,600.00

    Sample Case #2:
    No. of Days Worked: 15
    Employee Status:    Probationary
    Civil Status:       Married
    Result:

    Gross Salary:       4,800.00
    Tax:                10%
    Deduction:          480.00
    Net Salary:         4,320.00
    -->

    <h1>Exercise 1</h1>
    <form action="">
        No. of Days Worked <input type="text" name="days"><br /><br />
        Employee Status:
        <select name = "employee">
            <option>Regular</option>
            <option>Probationary</option>
            <option>Casual</option>
        </select> <br /><br />
        Civil Status:
        <select name = "status">
            <option>Single</option>
            <option>Married</option>
            <option>Widow</option>
        </select><br /><br />
        <button>Compute Salary</button>
    </form><br/><br />
    <?php
    // Do your code here
    $salary;
    $tax;
    $days = $_GET["days"];
    $employee = $_GET["employee"];
    $status = $_GET["status"];

    // Employee
    if($employee == "Regular")
        $salary = 500;
    if($employee == "Probationary")
        $salary = 400;
    if($employee == "Casual")
        $salary = 300;
        
    // Civil Status
    if($status == "Single")
        $tax = .12;
    if($status == "Married")
        $tax = .10;
    if($status == "Widow")
        $tax = .7;

    // OUTPUT
    $gross = $salary * $days;
    $deduction = $tax * $gross;
    $net = $gross - $deduction;




    echo "Gross Salary:" . $gross ."<br>";
    echo "Tax: "  . $tax . "% <br>";
    echo "Deduction: " . number_format($deduction, 2) . "<br>";
    echo "Net Salary: " . number_format($net, 2);
    ?>


</body>

</html>