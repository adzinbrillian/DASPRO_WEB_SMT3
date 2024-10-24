document.getElementById("priceCheckForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    const roomType = document.getElementById("roomType").value;
    const nights = document.getElementById("nights").value;

    fetch('checkPrice.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `roomType=${roomType}&nights=${nights}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("priceResult").innerHTML = `<h3>Total Price: ${data}</h3>`;
    });
});

function calculatePrice() {
    const floor = parseInt(document.getElementById('floor').value);
    const roomType = document.getElementById('type').value;
    const days = parseInt(document.getElementById('days').value);
    const discountType = document.getElementById('discount').value;

    let pricePerDay = 0;
    switch (roomType) {
        case 'Standard':
            pricePerDay = 5000;
            break;
        case 'Superior':
            pricePerDay = 6000;
            break;
        case 'Deluxe':
            pricePerDay = 7000;
            break;
    }

    let totalPrice = pricePerDay * days;

    if (floor > 5) {
        totalPrice += 1000;  // Extra charge for floors above 5
    }

    let discount = 0;
    if (discountType === 'Member') {
        discount = totalPrice * 0.10;  // 10% member discount
    } else if (discountType === 'Birthday Promo') {
        discount = 500;  // Flat IDR 500 discount for birthday
    }

    const finalPayment = totalPrice - discount;

    document.getElementById('totalPriceDisplay').innerText = `Total price is: ${totalPrice}`;
    document.getElementById('discountDisplay').innerText = `Total discount is: ${discount}`;
    document.getElementById('finalPaymentDisplay').innerText = `Total payment is: ${finalPayment}`;
}