// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
    /*
    // Get the reference to the BOW element
    const backBow = document.querySelector(".lg-bow");
    // Function to handle scroll event
    function handleScroll() {
        // Check the scroll position
        const scrollPosition = window.scrollY;

        // Add or remove the class based on the scroll position
        if (scrollPosition >= 220) {
            backBow.classList.add("scrolled");
            backBow.classList.remove("start");
        } else {
            backBow.classList.remove("scrolled");
            backBow.classList.add("start");
        }
    }
*/
    // turn cursor into spotlight
    function spotlightCursor() {
        var mouseX = 0, mouseY = 0;
        var xp = 0, yp = 0;
        addEventListener("mousemove", (e) => {
            mouseX = e.pageX - 75;
            mouseY = e.pageY - 75;
        });
        setInterval(function () {
            xp += ((mouseX - xp) / 6);
            yp += ((mouseY - yp) / 6);
            document.getElementById("spotlight").style.left = xp + 'px';
            document.getElementById("spotlight").style.top = yp + 'px';
        }, 20);
    }

    // TODO: run only if on entrance page
    spotlightCursor();

    /*
        // Attach the scroll event listener to the window
        window.addEventListener("scroll", handleScroll);
    */
});