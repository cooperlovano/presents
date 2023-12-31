// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
  // Get the reference to the Title element with the class "site-title"
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

  const hamburger = document.getElementById("hamburger")
  hamburger.addEventListener("click", toggleMenu);

  function toggleMenu() {
    const menu = document.getElementById("mainmenu");
    if (menu.classList.contains("open")) {
      menu.classList.remove("open");
    } else {
      menu.classList.add("open");
      console.log("working")
    }
  }

  // Attach the scroll event listener to the window
  window.addEventListener("scroll", handleScroll);

  // ticker
  const ticker = document.getElementById("ticker-wrapper");
  // toggle animate class on keyfame
  ticker.addEventListener("mouseover", function () {
    this.classList.remove("ticker-paused");
  });
  ticker.addEventListener("mouseout", function () {
    this.classList.add("ticker-paused");
  });
});
