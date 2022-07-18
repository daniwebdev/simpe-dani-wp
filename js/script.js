var LIGHT_BUTTON = document.querySelectorAll("#button-light");
var DARK_BUTTON = document.querySelectorAll("#button-dark");

document.body.onload = function () {
  if (true || localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark");
  } else {
    document.body.classList.remove("dark");
  }

  if (document.body.classList.contains("dark")) {
    //IS DARK
    LIGHT_BUTTON.forEach((button) => button.classList.remove("d-none"));
    DARK_BUTTON.forEach((button) => button.classList.add("d-none"));
  } else {
    //IS LIGHT
    LIGHT_BUTTON.forEach((button) => button.classList.add("d-none"));
    DARK_BUTTON.forEach((button) => button.classList.remove("d-none"));
  }

  //toggle button light button
  LIGHT_BUTTON.forEach((el) => {
    el.addEventListener("click", function () {
      document.body.classList.toggle("dark");

      LIGHT_BUTTON.forEach((lbEL) => lbEL.classList.toggle("d-none"));
      DARK_BUTTON.forEach((dbEL) => dbEL.classList.toggle("d-none"));

      //set local storage
      if (document.body.classList.contains("dark") == false) {
        localStorage.setItem("theme", "");
      }
    });
  });

  //toggle button dark button
  DARK_BUTTON.forEach((el) => {
    el.addEventListener("click", function () {
      document.body.classList.toggle("dark");

      LIGHT_BUTTON.forEach((lbEL) => lbEL.classList.toggle("d-none"));
      DARK_BUTTON.forEach((dbEL) => dbEL.classList.toggle("d-none"));

      //set local storage
      if (document.body.classList.contains("dark") == true) {
        localStorage.setItem("theme", "dark");
      }
    });
  });

  /* ----------------------------------- */
  /* BACK to TOP */
  /* ----------------------------------- */
  document.querySelector('.back-to-top').addEventListener('click', function() {
    window.scrollTo(0,0)
  })

  window.addEventListener('scroll', function() {
    var position = window.scrollY;
    var backToTop = document.querySelector('.back-to-top');

    if(position >= 500 && backToTop.classList.contains('hidden')) {
      backToTop.classList.remove('hidden')
    }

    if(position < 500 && !backToTop.classList.contains('hidden')) {
      backToTop.classList.add('hidden')
    }
  })

};


function toogleSearchModal() {
  var searchModal = document.querySelector('.search-modal');
  var searchModalOverlay = document.querySelector('.search-modal-overlay');
  var searchModalClose = document.querySelector('.search-modal-close');

  searchModal.classList.toggle('active');

  document.body.style.overflow = searchModal.classList.contains('active') ? 'hidden' : 'auto';
}

