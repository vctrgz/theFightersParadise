const container = document.querySelector(".container");

const signUpPromotorBtn = document.getElementById("sign-up-promotor-btn");

if (signUpPromotorBtn) {
  signUpPromotorBtn.addEventListener("click", animateCircleAndRedirect);
}

function animateCircleAndRedirect() {
  var circle = document.getElementById("animation-circle");

  // Escalar el círculo a 100% del tamaño de la pantalla
  circle.style.transform = "scale(" + (Math.max(window.innerWidth, window.innerHeight) / 10) + ")";
  
  setTimeout(() => {
    window.location.href = "/TheFightersParadise/views/login.php"; 
  }, 800); 
}