window.addEventListener("load", function () {
  document.querySelector(".preloader").classList.add("opacity-0");
  this.setTimeout(function () {
    document.querySelector(".preloader").style.display = "none";
  }, 1000);
});

/*Aside Navbar*/

const nav = document.querySelector(".nav"),
  navList = nav.querySelectorAll("li"),
  totalNavList = navList.length,
  allSection = document.querySelectorAll(".section"),
  totalSection = allSection.length;

for (let i = 0; i < totalNavList; i++) {
  const a = navList[i].querySelector("a");
  a.addEventListener("click", function () {
    //remove back section class
    /*for (let k = 0; k < totalSection; k++) {
      allSection[k].classList.remove("back-section");
    }*/
    removeBackSectionClass();

    for (let j = 0; j < totalNavList; j++) {
      if (navList[j].querySelector("a").classList.contains("active")) {
        //add back section class
        //allSection[j].classList.add("back-section");
        addBackSectionClass(j);
      }
      navList[j].querySelector("a").classList.remove("active");
    }
    this.classList.add("active");

    showSection(this);

    if (window.innerWidth < 1200) {
      asideSectionTogglerBtn();
    }
  });
}

function removeBackSectionClass() {
  for (let k = 0; k < totalSection; k++) {
    allSection[k].classList.remove("back-section");
  }
}

function addBackSectionClass(num) {
  allSection[num].classList.add("back-section");
}

function showSection(element) {
  //remove class active from all section
  for (let i = 0; i < totalSection; i++) {
    allSection[i].classList.remove("active");
  }
  const target = element.getAttribute("href").split("#")[1];

  document.querySelector("#" + target).classList.add("active");
}

function updateNav(element) {
  for (let i = 0; i < totalNavList; i++) {
    navList[i].querySelector("a").classList.remove("active");
    const target = element.getAttribute("href").split("#")[1];
    if (
      target ===
      navList[i].querySelector("a").getAttribute("href").split("#")[1]
    ) {
      navList[i].querySelector("a").classList.add("active");
    }
  }
}

document.querySelector(".hire-me").addEventListener("click", function () {
  const sectionIndex = this.getAttribute("data-section-index");
  showSection(this);
  updateNav(this);
  removeBackSectionClass();
  addBackSectionClass(sectionIndex);
});

const navTogglerBtn = document.querySelector(".nav-toggler"),
  aside = document.querySelector(".aside");

navTogglerBtn.addEventListener("click", asideSectionTogglerBtn);
//asideSectionTogglerBtn(); can also written like

function asideSectionTogglerBtn() {
  aside.classList.toggle("open");
  navTogglerBtn.classList.toggle("open");
  for (let i = 0; i < totalSection; i++) {
    allSection[i].classList.toggle("open");
  }
}

//clock
function Time() {
  var date = new Date();
  var dt = date.getDate();
  var day = date.getDay();
  var month = date.getMonth();
  var h = date.getHours();
  var m = date.getMinutes();
  var s = date.getSeconds();
  var next = "AM";
  if (h == 0) {
    h = 12;
  }
  if (h > 12) {
    h = h - 12;
    next = "PM";
  }

  var hari = "Monday";
  if (day = 1) {
    hari = "Monday";
  } else if (day = 2) {
    hari = "Tuesday";
  } else if (day = 3) {
    hari = "Wednesday";
  } else if (day = 4) {
    hari = "Thursday";
  } else if (day = 5) {
    hari = "Friday";
  } else if (day = 6) {
    hari = "Saturday";
  } else {
    hari = "Sunday";
  }

  var bulan = "January";
  if(month = 1) {
    bulan = "January";
  } else if(month = 2) {
    bulan = "February";
  } else if(month = 3) {
    bulan = "March";
  } else if(month = 4) {
    bulan = "April";
  } else if(month = 5) {
    bulan = "May";
  } else if(month = 6) {
    bulan = "June";
  } else if(month = 7) {
    bulan = "July";
  } else if(month = 8) {
    bulan = "August";
  } else if(month = 9) {
    bulan = "September";
  } else if(month = 10) {
    bulan = "October";
  } else {
    bulan = "November";
  }

  h = h < 10 ? "0" + h : h;
  m = m < 10 ? "0" + m : m;
  s = s < 10 ? "0" + s : s;

  var tarikh = dt + " : " + bulan;
  /*document.getElementById("date").innerText = tarikh;
  document.getElementById("date").textContent = tarikh;

  document.getElementById("day").innerText = hari;
  document.getElementById("day").textContent = hari;*/

  var time = h + ":" + m + ":" + s + " " + next;
  document.getElementById("clock").innerText = time;
  document.getElementById("clock").textContent = time;

  setTimeout(Time, 1000);
}
Time();