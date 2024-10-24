function calculatePrice() {
    // Get input values
    let floor = parseInt(document.getElementById("floor").value);
    let roomType = document.getElementById("roomType").value;
    let days = parseInt(document.getElementById("days").value);
    let discount = document.getElementById("discount").value;

    // Room prices
    const prices = {
        standard: 5000,
        superior: 6000,
        deluxe: 7000
    };

    // Calculate base rental price
    let rentalPrice = prices[roomType] * days;

    // Additional price for rooms above 5th floor
    if (floor > 5) {
        rentalPrice += 1000;
    }

    // Initialize discount values
    let discountAmount = 0;

    // Apply discount
    if (discount === "member") {
        discountAmount = rentalPrice * 0.10;  // 10% Member discount
    } else if (discount === "birthday") {
        discountAmount = 500;  // IDR 500 Birthday Promo
    }

    // Total price after discount
    let finalPayment = rentalPrice - discountAmount;

    // Update the display elements
    document.getElementById("totalPriceDisplay").innerText = `Total price is ${rentalPrice}`;
    document.getElementById("discountDisplay").innerText = `Total discount is ${discountAmount}`;
    document.getElementById("finalPaymentDisplay").innerText = `Total payment is ${finalPayment}`;
}