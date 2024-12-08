document.querySelector('.contact-form').addEventListener('submit', function (event) {
    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let message = document.getElementById('message').value.trim();
    let errors = [];

    if (name === "") {
        errors.push("Name cannot be empty.");
    } else if (name.length < 2) {
        errors.push("Name must be at least 2 characters long.");
    }

    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        errors.push("Please enter a valid email address.");
    }

    if (message === "") {
        errors.push("Message cannot be empty.");
    } else if (message.length < 10) {
        errors.push("Message must be at least 10 characters long.");
    }

    if (errors.length > 0) {
        event.preventDefault(); 
        alert(errors.join("\n"));
    } else {
        alert("Your message has been sent successfully!"); 
    }
});
