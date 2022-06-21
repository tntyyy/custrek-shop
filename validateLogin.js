const loginEmail = document.querySelector('#loginEmail'),
    loginPassword = document.querySelector('#loginPassword'),
    loginButton = document.querySelector('#loginButton');

const registerEmail = document.querySelector('#registerEmail'),
    registerName = document.querySelector('#registerName'),
    registerPassword = document.querySelector('#registerPassword'),
    registerButton = document.querySelector('#registerButton');

function validateEmail(email) {
    if (!email.indexOf('.')) {
        return false;
    }

    return true;
}

function validateName(name) {
    if (name.length < 3) {
        return false;
    }

    return true;
}

function validatePassword(pass) {
    if (pass.length < 6) {
        return false;
    }
    if (pass.)
}