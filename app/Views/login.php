<?php
$sessionMessage = session()->getFlashdata('session_message');
if (!empty($sessionMessage)) {
    echo "<script>alert('$sessionMessage')</script>";
}
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        * {
            /* font-family: 'Courier New', Courier, monospace; */
        }

        #email {
            width: 400px;
        }

        #password {
            width: 400px;
        }

        .login-card button {
            text-align: center;
        }
        body{
        background-color: #053B50;
    }

        .login-card {
            margin-top: 100px;
            height: 500px;
            width: 500px;
            border: 1px rgb(2, 0, 36);
            border-radius: 20px;
            box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
            transition: 0.4s;
            padding: 50px;
            color: #EEEEEE;
            background-color: #176B87;
            /* background-image: linear-gradient(to right top, #2f91ac, #00aeb7, #00c8a1, #32de6f, #a8eb12); */
        }

        h1 {
            text-align: center;
        }

        .container a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container login-card">
        <h1>User Login</h1>

        <form method="POST" action="<?= base_url("login") ?> ">

            <div class="mb-3">
                <label class="form-label" for="email"><b>Email id</b></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="xyz@gmail.com" style="border-radius: 50px;">
                <span id="emailError" class="error-message" style="color: red;font-weight: bold; font-size:14px"></span>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email"><b>Password</b></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" style="border-radius: 50px;">
                <span id="passwordError" class="error-message" style="color: red;font-weight: bold; font-size:14px"></span>
            </div>

            <button id="submit_btn" type="submit" class="btn btn-warning btn-lg" value="login" disabled>Login</button>

        </form>
        <a href="<?php echo base_url('signup') ?>">
            <p style="color:black;color: #EEEEEE;">Create your account</p>
        </a>
    </div>
    <br>
    <br>
    <footer style="text-align: center;color: #EEEEEE;">
        Made by Vadiraj⭐
    </footer>

    <script>
        //Email Validation
        var email_id = false;
        var pass = false;
        $(document).ready(function() {
            $('#email').keyup(function() {
                validateEmail();
            });

            function validateEmail() {
                var email = $('#email').val();
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                if (!emailPattern.test(email)) {
                    $('#emailError').text('Email format: xyz@gmail.com').css('color', 'red');
                    submitButton.prop('disabled', true);
                } else {
                    $('#emailError').text('Correct input.').css('color', '#68B984');
                    email_id = true;
                }
            }
        });
        //Password Validation
        $(document).ready(function() {
            $('#password').keyup(function() {
                validatePassword();
            });

            function validatePassword() {
                var password = $('#password').val();
                var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&+=!]).{8,}$/;

                if (passwordPattern.test(password)) {

                    $('#passwordError').text('Correct input.').css('color', '#68B984');
                    pass = true;
                } else {
                    $('#passwordError').text('Password should contain atleast one uppercase, one lowercase, one numerical & special character. ').css('color', 'red');
                    submitButton.prop('disabled', true);
                }

                if (email_id && pass) {
                    const submitButton = document.getElementById('submit_btn');
                    submitButton.removeAttribute('disabled');
                }
            }
        });
    </script>
</body>

</html>