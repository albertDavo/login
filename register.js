// Date picker
$("#picker").datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,

});

// Password validation
const password = document.querySelector("#password");
const registerButton = document.querySelector("#register");
const togglerConfirmPassword = document.querySelector("#toggleConfirmPassword");
const confirmPassword = document.querySelector("#confirmPassword");
const upper = document.querySelector('#upper');
const number = document.querySelector("#number");
const length = document.querySelector("#length");
const authorizeChar = document.querySelector("#authorize-characters");
// Icons
const lengthIcon = document.querySelector("#length-icon");
const authorizeIcon = document.querySelector("#authorize-icon");
const upperIcon = document.querySelector("#upper-icon");
const numberIcon = document.querySelector("#number-icon");
let isMatching = false;

const passwordMatch = document.querySelector("#passwordMatch");

// Password input focus event
password.addEventListener("focus", function () {

    gsap.fromTo(".validation-block", {
        autoAlpha: 0
    }, {
        duration: 0.3,
        autoAlpha: 1,
        display: 'block',
        y: 100
    })
})

password.addEventListener("blur", function () {
    gsap.to(".validation-block", {
        autoAlpha: 0,
        duration: 0.3,
        y: -100

    })
})

password.addEventListener("keyup", function () {
    let alphanumeric = RegExp(/^[a-zA-Z0-9_]*$/);
    let upperCase = RegExp(/.*?[A-Z]/);
    let numberReg = RegExp(/.*?[0-9]/);
    let a, b, c, d = 0;
    if (password.value.length >= 8) {
        length.classList.remove("text-danger");
        length.classList.add("text-success");
        lengthIcon.classList.remove("fa-angry", "text-danger");
        lengthIcon.classList.add("fa-smile", "text-success");
        a = 1;
    } else {
        length.classList.remove("text-success");
        length.classList.add("text-danger");
        lengthIcon.classList.remove("fa-smile", "text-success");
        lengthIcon.classList.add("fa-angry", "text-danger");
        // count--;
    };
    if (alphanumeric.test(password.value) && password.value != "") {
        authorizeChar.classList.remove("text-danger");
        authorizeChar.classList.add("text-success");
        authorizeIcon.classList.remove("fa-angry", "text-danger");
        authorizeIcon.classList.add("fa-smile", "text-success");
        b = 1;
    } else {
        authorizeChar.classList.remove("text-success");
        authorizeChar.classList.add("text-danger");
        authorizeIcon.classList.remove("fa-smile", "text-success");
        authorizeIcon.classList.add("fa-angry", "text-danger");
        // count--;
    };
    if (upperCase.test(password.value)) {
        upper.classList.remove("text-danger");
        upper.classList.add("text-success");
        upperIcon.classList.remove("fa-angry", "text-danger");
        upperIcon.classList.add("fa-smile", "text-success");
        c = 1;
    } else {
        upper.classList.remove("text-success");
        upper.classList.add("text-danger");
        upperIcon.classList.remove("fa-smile", "text-success");
        upperIcon.classList.add("fa-angry", "text-danger");
        // count--;
    };
    if (numberReg.test(password.value)) {
        number.classList.remove("text-danger");
        number.classList.add("text-success");
        numberIcon.classList.remove("fa-angry", "text-danger");
        numberIcon.classList.add("fa-smile", "text-success");
        d = 1;
    } else {

        number.classList.remove("text-success");
        number.classList.add("text-danger");
        numberIcon.classList.remove("fa-smile", "text-success");
        numberIcon.classList.add("fa-angry", "text-danger");
    }

    if (a == b == c == d && a == 1) {
        isMatching = true;

    } else {
        isMatching = false
    }

    // IF is matching input values
    if (password.value == confirmPassword.value && password.value != "" && isMatching) {
        passwordMatch.classList.remove("d-none");
        passwordMatch.classList.add("d-flex");
        gsap.fromTo("#passwordMatch", {
            autoAlpha: 0,
        }, {
            duration: 0.6,
            autoAlpha: 1,
            y: 50
        });
        registerButton.removeAttribute("disabled");
        registerButton.classList.remove("btn-danger");
        registerButton.classList.add("btn-success");

    } else {

        gsap.fromTo("#passwordMatch", {
            autoAlpha: 1,
            y: 50
        }, {
            duration: 0.6,
            autoAlpha: 0,
            y: -100
        })
        passwordMatch.classList.remove("d-flex");
        passwordMatch.classList.add("d-none");

        registerButton.classList.remove("btn-success");
        registerButton.classList.add("btn-danger");
        registerButton.setAttribute("disabled");
        // console.log(false);

    }

});






// password show hide icon
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

togglerConfirmPassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    confirmPassword.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

confirmPassword.addEventListener("keyup", function () {
    if (password.value == confirmPassword.value && password.value != "" && isMatching == true) {
        passwordMatch.classList.remove("d-none");
        passwordMatch.classList.add("d-flex");
        gsap.fromTo("#passwordMatch", {
            autoAlpha: 0,
            y: -100
        }, {
            duration: 0.6,
            autoAlpha: 1,
            y: 50
        })
        registerButton.removeAttribute("disabled");
        registerButton.classList.remove("btn-danger");
        registerButton.classList.add("btn-success");
    } else {

        gsap.fromTo("#passwordMatch", {
            autoAlpha: 1,
            y: 50
        }, {
            duration: 0.6,
            autoAlpha: 0,
            y: -100
        })
        passwordMatch.classList.remove("d-flex");
        passwordMatch.classList.add("d-none");

        registerButton.classList.remove("btn-success");
        registerButton.classList.add("btn-danger");
        registerButton.setAttribute("disabled");
    }
})