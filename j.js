const date = new Date();
document.getElementById("date").innerHTML =date;

// Function to show the popup
function showPopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "block";
}

// Function to close the popup
function closePopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "none";
}

// Show the popup when the page loads
window.onload = function () {
    showPopup();
};
