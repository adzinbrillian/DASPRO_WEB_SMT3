<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <h1>Form Input dengan Validasi</h1>

    <form id="myForm" method="post" action="proses_validation.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Client-side validation
                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email == "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!validateEmail(email)) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password == "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password harus memiliki minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // If all validations pass, use AJAX to submit form
                if (valid) {
                    $.ajax({
                        url: "proses_validation.php",
                        type: "POST",
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            alert(response);  // You can replace this with better UI feedback
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert("Request failed: " + textStatus + " - " + errorThrown);
                        }
                    });
                }
            });

            // Helper function to validate email format
            function validateEmail(email) {
                var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }
        });
    </script>

</body>

</html>