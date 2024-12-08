// Login Form Validation
document.querySelector('.logInForm').addEventListener('submit', function (event) {
    let username = document.getElementById('username').value.trim();
    let password = document.getElementById('password').value.trim();
    let errors = [];

    // Validate username
    if (username === "") {
        errors.push("Username cannot be empty.");
    }

    // Validate password
    if (password === "") {
        errors.push("Password cannot be empty.");
    }

    // Show errors if any
    if (errors.length > 0) {
        event.preventDefault(); // Stop form submission
        alert(errors.join("\n"));
    } else {
        alert("Login successful!"); // Optional feedback for successful validation
    }
});

// Register Form Validation
document.querySelector('form[action="#"]').addEventListener('submit', function (event) {
    let fullname = document.getElementById('fullname').value.trim();
    let email = document.getElementById('email').value.trim();
    let username = document.getElementById('username').value.trim();
    let password = document.getElementById('password').value.trim();
    let confirmPassword = document.getElementById('confirm_password').value.trim();
    let errors = [];

    // Validate fullname
    if (fullname === "" || fullname.length < 2) {
        errors.push("Fullname must be at least 2 characters.");
    }

    // Validate email using regex
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        errors.push("Invalid email format.");
    }

    // Validate username
    if (username.length < 3) {
        errors.push("Username must be at least 3 characters.");
    }

    // Validate password
    if (password.length < 8) {
        errors.push("Password must be at least 8 characters.");
    }

    // Confirm password validation
    if (password !== confirmPassword) {
        errors.push("Passwords do not match.");
    }

    // Show errors if any
    if (errors.length > 0) {
        event.preventDefault(); // Stop form submission
        alert(errors.join("\n"));
    } else {
        alert("Registration successful!"); // Optional feedback for successful validation
    }
});
