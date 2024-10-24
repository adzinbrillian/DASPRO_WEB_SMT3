function validateForm() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let usernameError = document.getElementById("usernameError");
    let passwordError = document.getElementById("passwordError");
    
    let valid = true;

    // Clear previous error messages
    usernameError.textContent = "";
    passwordError.textContent = "";

    // Check if username is empty
    if (username === "") {
        usernameError.textContent = "Must be filled";
        valid = false;
    }

    // Check if password is empty
    if (password === "") {
        passwordError.textContent = "Must be filled";
        valid = false;
    } 
    // Check if password is less than 5 characters
    else if (password.length < 5) {
        passwordError.textContent = "Password is at least 5 characters";
        valid = false;
    } 
    // Check if password contains both letters and numbers
    else if (!/\d/.test(password) || !/[a-zA-Z]/.test(password)) {
        passwordError.textContent = "Password must consist of letters and numbers.";
        valid = false;
    }

    return valid;
}