// Html tags
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const logIn = document.querySelector("#log-in");
const togglePassword = document.querySelector("#togglePassword");
const passwordValidation = document.querySelector(".password-validation");

// Show and hide password input
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});