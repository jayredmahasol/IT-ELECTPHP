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
    // Do your code here!
    $salary = 0;
    $tax = 0;

    if (isset($_GET["days"]) && isset($_GET["employee"]) && isset($_GET["status"])) {
        $days = (int)$_GET["days"];
        $employee = $_GET["employee"];
        $status = $_GET["status"];
    
    // determine employe type
    switch ($employee) {
        case "Regular":
            $salary = 500;
            break;
        case "Probationary":
            $salary = 400;
            break;
        case "Casual":
            $salary = 300;
            break;
        default:
            $salary = 0;
            break;
    }
    // determine civil status 
    switch ($status) {
        case "Single":
            $tax = 0.12;
            break;
        case "Married":
            $tax = 0.10;
            break;
        case "Widow":
            $tax = 0.07;
            break;
        default:
            $tax = 0.00;
            break;
    }

    // computation
    $gross = $salary * $days;
    $deduction = $tax * $gross;
    $net = $gross - $deduction;

    // Output results
    echo "Gross Salary: " . number_format($gross, 2) . "<br>";
    echo "Tax Rate: " . ($tax * 100) . "% <br>";
    echo "Deduction: " . number_format($deduction, 2) . "<br>";
    echo "Net Salary: " . number_format($net, 2);
    }
    else
    {
        echo "Please provide days, employee type, and status.";
    }
?>


</body>

</html>