  let slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }


// // login register
//   const loginBtn = document.querySelector('.js-login-btn');
//   const registerBtn = document.querySelector('.js-register-btn');
//   const modelLogin = document.querySelector('.js-model__login');
//   const modelRegister = document.querySelector('.js-model__register');
//   const closeBtnLogin = document.querySelector('.js-close-btn__login');
//   const closeBtnRegister = document.querySelector('.js-close-btn__register');
//   const modelCtn = document.querySelector('.js-model-ctn');

//   function showModelLogin(){
//       modelLogin.classList.add('open');
//   }

//   function hideModelLogin(){
//       modelLogin.classList.remove('open');
//   }

//   function showModelRegester(){
//       modelRegister.classList.add('open');
//   }

//   function hideModelRegester(){
//       modelRegister.classList.remove('open');
//   }

//   loginBtn.addEventListener('click', showModelLogin);
//   registerBtn.addEventListener('click', showModelRegester);
//   closeBtnLogin.addEventListener('click', hideModelLogin);
//   closeBtnRegister.addEventListener('click', hideModelRegester);

//   modelLogin.addEventListener('click', hideModelLogin);
//   modelCtn.addEventListener('click', function(event){
//   event.stopPropagation();
//   });

//   modelRegister.addEventListener('click', hideModelRegester);
//   modelCtn.addEventListener('click', function(event){
//   event.stopPropagation();
//   });

