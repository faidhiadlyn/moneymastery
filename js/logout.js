
// Function to show the confirmation popup
function showConfirmation() {
    // Display a confirmation dialog
    var result = confirm("Are you sure you want to logout?");

    // If the user clicks "OK", perform the logout action
    if (result) {
        // You can add your logout logic here
        alert("Logging out...");
    } else {
        // If the user clicks "Cancel", do nothing or handle accordingly
        alert("Logout canceled.");
    }
}

// Attach the function to the logout button click event
document.getElementById("logoutButton").addEventListener("click", showConfirmation);
