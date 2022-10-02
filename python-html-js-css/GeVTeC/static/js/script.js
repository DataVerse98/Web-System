const nav = document.querySelectorAll(".menu-btn");
const totNav = nav.length;
/*
for (let i = 0; i < totNav; i++) {
  nav[i].addEventListener("click", function () {
    for (let j = 0; j < totNav; j++) {
      nav[j].classList.remove("active");
    }
    this.classList.add("active");
  });
}*/
//sub menu if open only
/*
const dropDown = document.querySelectorAll(".drop-down");
const subMenu = document.querySelectorAll(".sub-menu");
const display = document.querySelectorAll(".display");
for (let i = 0; i < dropDown.length; i++) {
  dropDown[i].addEventListener("click", function () {
    subMenu[i].classList.toggle("show");
    this.classList.toggle("rotate");
  });
}
for (let i = 0; i < display.length; i++) {
  display[i].addEventListener("click", function () {
    subMenu[i].classList.toggle("show");
    dropDown[i].classList.toggle("rotate");
  });
}*/

//scroll
//Change navigation style on scroll
window.addEventListener("scroll", (event) => {
  let nav = document.querySelector(".sidebar");

  window.scrollY >= 44
    ? nav.classList.add("scroll")
    : nav.classList.remove("scroll");
});

//Active navigation on scroll
window.addEventListener("scroll", (event) => {
  let navigationLinks = document.querySelectorAll(".menu-btn");
  let fromTop = window.scrollY;

  navigationLinks.forEach((link) => {
    let section = document.querySelector(link.hash);

    if (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
});

window.onclick = function () {
  let btnClick = document.querySelectorAll(".menu-btn");
  let open = document.querySelector(".wrapper");
  if (window.innerWidth < 575) {
    for (let i = 0; i < btnClick.length; i++) {
      btnClick[i].addEventListener("click", function () {
        /*for (let j = 0; j < totNav; j++) {
          open.classList.remove("open");
        }*/
        open.classList.remove("open");
      });
    }
  }
};
