// Get the button:


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {gorget()};

function gorget() {
  var gomb = document.getElementById("felgorget");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    gomb.className = 'aktivvv';
  } else {
    gomb.className = '';
  }
}

// When the user clicks on the button, scroll to the top of the document
function fel() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}