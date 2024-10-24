<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $roomType = $_POST['roomType'];
    $nights = intval($_POST['nights']);

    // Prices per night for different room types
    $prices = [
        "standard" => 100,
        "deluxe" => 150,
        "suite" => 250,
    ];

    // Calculate total price
    $totalPrice = $prices[$roomType] * $nights;

    // Return the result
    echo "$" . $totalPrice;
}
?>