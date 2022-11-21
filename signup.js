const firstname = document.getElementById("firstname");
const lastname = document.getElementById("lastname");
const email = document.getElementById("email");
const password = document.getElementById("password1");
const passwordConfirmed = document.getElementById("password2");
const form = document.getElementById("register");
const errorFirstname = document.getElementById("errorFirstname");
const errorLastname = document.getElementById("errorLastname");
const errorEmail = document.getElementById("errorEmail");
const errorPassword = document.getElementById("errorPassword1");
const errorPasswordConfirmed = document.getElementById("errorPassword2");

form.addEventListener("submit", (e) => {
    var index = 0;
    if (firstname.value === "" || firstname.value == null) {
        index++;
        firstname.classList.add("is-invalid");
        errorFirstname.innerHTML = "Firstname is required to create your account.";
    } else {
        firstname.classList.remove("is-invalid")
        firstname.classList.add("is-valid");
        errorFirstname.innerHTML = "Looks Good !";
    }
    if (lastname.value === "" || lastname.value == null) {
        index++;
        lastname.classList.add("is-invalid");
        errorLastname.innerHTML = "Lastname is required to create your account.";
    } else {
        lastname.classList.remove("is-invalid")
        lastname.classList.add("is-valid");
        errorLastname.innerHTML = "Looks Good !";
    }
    if (email.value === "" || email.value == null) {
        index++;
        email.classList.add("is-invalid");
        errorEmail.innerHTML = "Adress email is required to create your account.";
    } else {
        email.classList.remove("is-invalid")
        email.classList.add("is-valid");
        errorEmail.innerHTML = "Looks Good !";
    }

    if (password.value === "" || password.value == null) {
        index++;
        password.classList.add("is-invalid");
        errorPassword.innerHTML = "Enter a valid password !!";
    } else {
        password.classList.remove("is-invalid")
        password.classList.add("is-valid");
        errorPassword.innerHTML = "Looks Good !";
    }
    if ((passwordConfirmed.value === "" || passwordConfirmed.value == null) || passwordConfirmed.value !== password.value) {
        index++;
        passwordConfirmed.classList.add("is-invalid");
        errorPasswordConfirmed.innerHTML = "Passwords doesn't match !!";
    } else {
        passwordConfirmed.classList.remove("is-invalid")
        passwordConfirmed.classList.add("is-valid");
        errorPasswordConfirmed.innerHTML = "Looks Good !";
    }
    if (index > 0) {
        e.preventDefault();
    }

});