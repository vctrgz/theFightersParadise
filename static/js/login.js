const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

function animateCircleAndRedirect() {
  var circle = document.getElementById("animation-circle");

  // Escalar el círculo a 100% del tamaño de la pantalla
  circle.style.transform = "scale(" + (Math.max(window.innerWidth, window.innerHeight) / 10) + ")";
  
  setTimeout(() => {
    window.location.href = "/TheFightersParadise/views/loginPromotor.php"; 
  }, 800); 
}



sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
  document.body.classList.add("sign-up-mode-body-color");
  document.body.classList.remove("sign-in-mode-body-color");
});


sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
  document.body.classList.remove("sign-up-mode-body-color");
  document.body.classList.add("sign-in-mode-body-color");

});




