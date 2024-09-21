<?php
$totalSeats = 45;

$occupiedSeats = 28;

$emptySeats = $totalSeats - $occupiedSeats;

$percentageEmpty = ($emptySeats / $totalSeats) * 100;

echo "Total number of seats in the restaurant: {$totalSeats} <br>";
echo "Number of seats occupied by customers: {$occupiedSeats} <br>";
echo "Number of seats still empty: {$emptySeats} <br>";

echo "Percentage of empty seats: " . number_format($percentageEmpty, 2) . "%<br>";
?>
