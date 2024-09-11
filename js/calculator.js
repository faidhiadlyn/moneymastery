document.addEventListener('DOMContentLoaded', function () {
    const priceForm = document.querySelector('#price-form');
    priceForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // Get the input values
        const amount = document.getElementById('amount').value;
        const months = document.getElementById('months').value;

        // Validate input values
        if (!amount || !months) {
            alert('Please enter both price amount and number of months.');
            return;
        }

        // Calculate monthly payment
        const totalAmount = parseFloat(amount);
        const totalMonths = parseInt(months);

        // Ensure the number of months is greater than 0 to avoid division by zero
        if (totalMonths <= 0) {
            alert('Number of months should be greater than 0.');
            return;
        }

        const monthlyPayment = (totalAmount / totalMonths).toFixed(2);

        // Display the result
        document.getElementById('monthlyPayment').innerHTML = 'RM ' + monthlyPayment;
    });
});
