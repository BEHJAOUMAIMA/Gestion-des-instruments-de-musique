const password = document.getElementById("password");
const email = document.getElementById("email");
const form = document.getElementById("login");
const errorEmail = document.getElementById("errorEmail");
const errorPassword = document.getElementById("errorPassword");
const btn = document.getElementById("btn1");
const regexEmail = /^[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]{2,}$/;
const regexPassword = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/;

// Validation avec Regex 
email.addEventListener('input', (x) => {
    if (!regexEmail.test(email.value)) {
        email.classList.add("is-invalid");
        errorEmail.innerText = "the valid format should be like exemple@gmail.com";
        btn.setAttribute("disabled", "disabled");
    } else {
        email.classList.remove("is-invalid");
        email.classList.add("is-valid");
        errorEmail.innerText = "";
        btn.removeAttribute("disabled");
    }
})

password.addEventListener('input', (x) => {
        if (!regexPassword.test(password.value)) {
            password.classList.add("is-invalid");
            errorPassword.innerText = "At least one upper case English letter,one lower case English letter,one digit,one special character or space";
            btn.setAttribute("disabled", "disabled");
        } else {
            password.classList.remove("is-invalid");
            password.classList.add("is-valid");
            errorPassword.innerText = "";
            btn.removeAttribute("disabled");
        }
    })
    // validation normale
form.addEventListener("submit", (e) => {
    var index = 0;
    if (email.value === "" || email.value == null) {
        index++;
        email.classList.add("is-invalid");
        errorEmail.innerHTML = "Adress email is required to create your account.";
    } else {
        email.classList.remove("is-invalid");
        email.classList.add("is-valid");
        // errorEmail.innerHTML = "Looks Good !";
    }

    if (password.value === "" || password.value == null) {
        index++;
        password.classList.add("is-invalid");
        errorPassword.innerHTML = "Enter a valid password !!";
    } else {
        password.classList.remove("is-invalid");
        password.classList.add("is-valid");
        // errorPassword.innerHTML = "Looks Good !";
    }
    if (index > 0) {
        e.preventDefault();
    }
});