
var LIGHT_BUTTON = document.querySelectorAll("#button-light");
var DARK_BUTTON = document.querySelectorAll("#button-dark");

document.body.onload = function () {
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark");
    } else {
        document.body.classList.remove("dark");
    }

  if (document.body.classList.contains("dark")) {
    //IS DARK
    LIGHT_BUTTON.forEach(button => button.classList.remove("d-none"));
    DARK_BUTTON.forEach(button => button.classList.add("d-none"));
  } else {
    //IS LIGHT
    LIGHT_BUTTON.forEach(button => button.classList.add("d-none"));
    DARK_BUTTON.forEach(button => button.classList.remove("d-none"));
  }

  //toggle button light button
  LIGHT_BUTTON.forEach(el => {
    el.addEventListener("click", function () {
      
      document.body.classList.toggle("dark");

      LIGHT_BUTTON.forEach(lbEL => lbEL.classList.toggle("d-none"));
      DARK_BUTTON.forEach(dbEL => dbEL.classList.toggle("d-none"));
  
      //set local storage
      if (document.body.classList.contains("dark") == false) {
          localStorage.setItem("theme", "");
      }
    });
  })

  //toggle button dark button
  DARK_BUTTON.forEach(el => {
    el.addEventListener("click", function () {
      
      document.body.classList.toggle("dark");

      LIGHT_BUTTON.forEach(lbEL => lbEL.classList.toggle("d-none"));
      DARK_BUTTON.forEach(dbEL => dbEL.classList.toggle("d-none"));
  
      //set local storage
      if (document.body.classList.contains("dark") == true) {
          localStorage.setItem("theme", "dark");
      }
    });
  })
};