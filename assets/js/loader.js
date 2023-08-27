// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
    // Get the button element with the class "hide-score"
    var hideButton = document.querySelector(".hide-score");

    // Get the div element with the ID "score"
    var scoreDiv = document.getElementById("score");

    // Add a click event listener to the button
    hideButton.addEventListener("click", function () {
        scoreDiv.style.display = "none"; // Hide the score div
    });
});
