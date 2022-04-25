<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Electricity Bill Calculator</title>
</head>
<body>
    <main>
        <h1> PHP - Calculate Electricity Bill</h1>

        <form action = "" method = "post" > 
            <label> Please input units </label>
            <input type = "number" name ="units" placeholder="Please enter no. of Units">
            <input type ="submit">  </button>
        </form>

    </main>

</body>
</html>

<?php
    function calculateBill ($units) {
    $unitForFirstCost = 3.50;
    $unitForSecondCost = 4.00;
    $unitForThirdCost = 5.20;
    $unitForFourthCost = 6.50;

    // if the unit is not up to 50, 
     if ($units <= 50) {
        $bill = $units * $unitForFirstCost;
   
    
    } 
    else if ($units > 50 && $units <= 100) { // if the unit is > 50 and less than or up to 100
        $counter = 50 * $unitForFirstCost;
        $remainingBalance = $units - 50;
        $bill = $counter + ($remainingBalance * $unitForSecondCost);

    } 
    else if ($units > 100 && $units <= 200) { // if the unit is greater than 100 and less than or equals to 200
        $counter = (50 * 3.50) + (100 * $unitForSecondCost) + (100 * $unitForThirdCost);
        $remainingBalance = $units - 150;
        $bill = $counter + ($remainingBalance * $unitForThirdCost);

    } 
    else { // ($units > 250 )  if the unit is above 250
        $counter = (50 * 3.50) + (100 * $unitForThirdCost) + (150 * $unitForFourthCost);
        $remainingBalance = $units - 250;
        $bill = $counter + ($remainingBalance * $unitForFourthCost);
        
    }

    return $bill;
}


?>
