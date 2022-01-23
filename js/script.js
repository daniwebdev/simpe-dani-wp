
var LIGHT_BUTTON = document.querySelector("#button-light");
var DARK_BUTTON = document.querySelector("#button-dark");

document.body.onload = function () {
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark");
    } else {
        document.body.classList.remove("dark");
    }

  if (document.body.classList.contains("dark")) {
    //IS DARK
    LIGHT_BUTTON.classList.remove("d-none");
    DARK_BUTTON.classList.add("d-none");
  } else {
    //IS LIGHT
    DARK_BUTTON.classList.remove("d-none");
    LIGHT_BUTTON.classList.add("d-none");
  }

  //toggle button light button
  LIGHT_BUTTON.addEventListener("click", function () {
    document.body.classList.toggle("dark");
    LIGHT_BUTTON.classList.toggle("d-none");
    DARK_BUTTON.classList.toggle("d-none");

    //set local storage
    if (document.body.classList.contains("dark") == false) {
        localStorage.setItem("theme", "");
    }
  });

  //toggle button dark button
  DARK_BUTTON.addEventListener("click", function () {
    document.body.classList.toggle("dark");
    LIGHT_BUTTON.classList.toggle("d-none");
    DARK_BUTTON.classList.toggle("d-none");

    //set local storage
    if (document.body.classList.contains("dark")) {
        localStorage.setItem("theme", "dark");
    }
  });
};
