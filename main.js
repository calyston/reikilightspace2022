//Hamburger Menu

const menu = document.querySelector(".hamburger-menu");
const hamburger = document.querySelector(".hamburger");

function toggleMenu() {

  const closeIcon = document.querySelector(".close-icon");
  const menuIcon = document.querySelector(".menu-icon");
  const body = document.querySelector("body");

  if (menu.classList.contains("showMenu")) {
    menu.classList.remove("showMenu");
    body.classList.remove("hideOverflow");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    menu.classList.add("showMenu");
    body.classList.add("hideOverflow");
    closeIcon.setAttribute('style', 'display:block !important');
    menuIcon.style.display = "none";
  }
}

hamburger.addEventListener("click", toggleMenu);

//

// Back To Top Button

const backToTopBtn = document.querySelector("#back-to-top");

window.addEventListener("scroll", scrollFunction);

//Display Button on Scroll
function scrollFunction() {
  if (window.pageYOffset > 100) {
    backToTopBtn.style.animation = "fadeIn 1s";
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
}

backToTopBtn.addEventListener("click", backToTop);

//Move Page Back to Top
function backToTop() {
  window.scrollTo(0, 0);
}