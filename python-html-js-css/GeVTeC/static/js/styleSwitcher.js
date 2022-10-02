//clock
function Time() {
  var date = new Date();
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

  h = h < 10 ? "0" + h : h;
  m = m < 10 ? "0" + m : m;
  s = s < 10 ? "0" + s : s;

  var time = h + ":" + m + ":" + s + " " + next;
  document.getElementById("clock").innerText = time;
  document.getElementById("clock").textContent = time;

  setTimeout(Time, 1000);
}
Time();

// body skin

const bodySkin = document.querySelectorAll(".body-skin"),
  totalBodySkin = bodySkin.length;

for (let i = 0; i < totalBodySkin; i++) {
  bodySkin[i].addEventListener("change", function () {
    if (this.value === "dark") {
      document.body.className = "dark";
    } else {
      document.body.className = "";
    }
  });
}

document
  .querySelector(".toggle-style-switcher")
  .addEventListener("click", () => {
    document.querySelector(".style-switcher").classList.toggle("open");
  });
