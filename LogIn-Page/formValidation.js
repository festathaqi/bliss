
document.querySelector('#signUp').addEventListener('click', function (event) {
    let fullname = document.getElementById('fullname').value.trim();
    let email = document.getElementById('email').value.trim();
    let username = document.getElementById('username').value.trim();
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirm_password').value;
    let valid = true;

    if (fullname === "" || fullname.length < 2) {
        alert("Fullname must be at least 2 characters long.");
        valid = false;
    }


    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email.");
        valid = false;
    }

    if (username.length < 3) {
        alert("Username must be at least 3 characters long.");
        valid = false;
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        valid = false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});

document.querySelector('#logIn').addEventListener('click', function (event) {
    let username = document.getElementById('username').value.trim();
    let password = document.getElementById('password').value;
    let valid = true;

    if (username === "") {
        alert("Username cannot be empty.");
        valid = false;
    }

    if (password === "") {
        alert("Password cannot be empty.");
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});
