<?php
// Check if 'input' and 'email' exist in POST request before using them
$input = isset($_POST['input']) ? $_POST['input'] : '';
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

$email = isset($_POST['email']) ? $_POST['email'] : '';

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email valid: " . $email;
} else {
    echo "Email tidak valid";
}
?>
