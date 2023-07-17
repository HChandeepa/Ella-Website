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

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
