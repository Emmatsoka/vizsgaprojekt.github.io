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

function reveal4() {
  var reveals = document.querySelectorAll(".attunes2");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 5;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("aktivv");
    } else {
      reveals[i].classList.remove("aktivv");
    }
  }
}

reveal4();


var bg = document.querySelector('.mozgatas');
var windowWidth = window.innerWidth / 5;
var windowHeight = window.innerHeight / 5 ;

bg.addEventListener('mousemove', (e) => {
  var mouseX = e.clientX / windowWidth;
  var mouseY = e.clientY / windowHeight;
  
  bg.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
});