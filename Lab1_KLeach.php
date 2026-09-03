<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vacation Budget Calculator</title>
</head>
<body>

<h1>Vacation Budget Calculator</h1>

<?php

// -------------------------
// Vacation Information
// -------------------------

$destination = "Seattle";
$numberOfNights = 7;
$hotelRate = 150.00;
$airfare = 650.00;
$foodPerDay = 60.00;
$activityCost = 250.00;
$vacationBudget = 2500.00;


// -------------------------
// Calculate Hotel Cost
// -------------------------

$hotelCost = $hotelRate * $numberOfNights;

// If person stays 7 or more nights, they get a 10% discount on the hotel cost

if ($numberOfNights >= 7) {
    $hotelCost = $hotelCost - ($hotelCost * 0.10);
}

// -------------------------
// Calculate Food Cost
// -------------------------

$foodCost = $foodPerDay * $numberOfNights;


// -------------------------
// Calculate Total Vacation Cost
// -------------------------

$totalVacationCost = $hotelCost + $airfare + $foodCost + $activityCost;


// -------------------------
// Display Vacation Information
// -------------------------
echo "<h2>Trip Information</h2>";

echo "<p>Destination: $destination</p>";
echo "<p>Number of Nights: $numberOfNights</p>";
echo "<p>Vacation Budget: $" . number_format($vacationBudget, 2) . "</p>";

echo "<h2>Estimated Expenses</h2>";

echo "<p>Hotel Cost: $" . number_format($hotelCost, 2) . "</p>";
echo "<p>Airfare: $" . number_format($airfare, 2) . "</p>";
echo "<p>Food Cost: $" . number_format($foodCost, 2) . "</p>";
echo "<p>Activities: $" . number_format($activityCost, 2) . "</p>";

echo "<h2>Total Vacation Cost: $" .
     number_format($totalVacationCost, 2) .
     "</h2>";



// -------------------------
// Determine Budget Status
// -------------------------

echo "<h2>Remaining Budget: $" . number_format($vacationBudget - $totalVacationCost, 2) . "</h2>";

?>

</body>
</html>