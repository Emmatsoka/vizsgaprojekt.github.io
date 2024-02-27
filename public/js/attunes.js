function reveal() {
    var reveals = document.querySelectorAll(".attunes");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("aktivv");
      } else {
        reveals[i].classList.remove("aktivv");
      }
    }
  }

window.addEventListener("scroll", reveal);


reveal();

function reveal2() {
  var reveals = document.querySelectorAll(".balattunes");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("aktivv");
    } else {
      reveals[i].classList.remove("aktivv");
    }
  }
}

window.addEventListener("scroll", reveal2);


reveal2();

function reveal3() {
  var reveals = document.querySelectorAll(".jobbattunes");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("aktivv");
    } else {
      reveals[i].classList.remove("aktivv");
    }
  }
}

window.addEventListener("scroll", reveal3);


reveal3();

