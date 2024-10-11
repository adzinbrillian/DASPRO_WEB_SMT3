<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Server-side validation
    if (empty($nama) || empty($email) || empty($password)) {
        echo "Nama, Email, dan Password harus diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format email tidak valid!";
    } elseif (strlen($password) < 8) {
        echo "Password harus memiliki minimal 8 karakter!";
    } else {
        echo "Form submitted successfully with Nama: $nama, Email: $email";
    }
}
?>