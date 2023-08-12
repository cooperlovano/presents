// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
  // Get the reference to the element with the class "site-title"
  const siteTitle = document.querySelector(".site-title");
  const fixedheader = document.querySelector(".fixed-header");

  // Function to handle scroll event
  function handleScroll() {
    // Check the scroll position
    const scrollPosition = window.scrollY;

    // Add or remove the class based on the scroll position
    if (scrollPosition >= 40) {
      siteTitle.classList.add("scrolled");
      fixedheader.classList.add("scrolled");
    } else {
      siteTitle.classList.remove("scrolled");
      fixedheader.classList.remove("scrolled");
    }

    // Calculate the new font size based on the scroll position
    let newFontSize = 50 - scrollPosition / 1.4; // Adjust this factor for faster/slower resizing

    // Ensure the font size stays within the range of 1 to 50 pixels
    newFontSize = Math.min(Math.max(newFontSize, 1), 50);
    const newLineHeight = Math.min(Math.max(newFontSize, 1), 40);

    // Update the font size and line height of the site-title element
    siteTitle.style.fontSize = newFontSize + "px";
    siteTitle.style.lineHeight = newLineHeight + "px";
  }

  // turn cursor into spotlight
  function spotlightCursor () {
    var mouseX = 0, mouseY = 0;
    var xp = 0, yp = 0;
    addEventListener("mousemove", (e) => {
      mouseX = e.pageX - 75;
      mouseY = e.pageY - 75;
    });
    setInterval(function(){
      xp += ((mouseX - xp)/6);
      yp += ((mouseY - yp)/6);
      document.getElementById("spotlight").style.left=xp +'px';
      document.getElementById("spotlight").style.top=yp +'px';
    }, 20);
  }

  // TODO: run only if on entrance page
  spotlightCursor();

  // Attach the scroll event listener to the window
  window.addEventListener("scroll", handleScroll);

  // ticker
  const ticker = document.getElementById("ticker-wrapper");
  // toggle animate class on keyfame
  ticker.addEventListener("mouseover", function() {
    this.classList.remove("ticker-paused");
  });
  ticker.addEventListener("mouseout", function() {
    this.classList.add("ticker-paused");
  });
});
