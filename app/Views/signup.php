<?php
$sessionMessage = session()->getFlashdata('session_message');
if (!empty($sessionMessage)) {
    echo "<script>alert('$sessionMessage')</script>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    * {
        /* font-family: 'Courier New', Courier, monospace; */
    }
    body{
        background-color: #053B50;
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

    .login-card {
        height: 900px;
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

    input {
        text-decoration: none;
    }
    .container a {
        text-decoration: none;
    }
</style>
</head>
<body>
    <br>
    <br>
<div class="container login-card">
    <h1>User Sign Up</h1>
    <form method="POST" action="<?= base_url("signup") ?> ">
        <div class="mb-3">
            <label class="form-label" for="fname"><b>First name</b></label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="John">
            <span id="fnameError" class="error-message" style="font-size: 14px; font-weight: bold;"></span>
        </div>

        <div class="mb-3">
            <label class="form-label" for="lname"><b>Last name</b></label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Martin">
            <span id="lnameError" class="error-message" style="font-size: 14px;font-weight: bold;"></span>
        </div>

        <div class="mb-3">
            <label class="form-label" for="contact"><b>Contact number</b></label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="98XXXXXXXX or +91 98XXXXXXXX">
            <span id="contactError" class="error-message" style="font-size: 14px;font-weight: bold;"></span>
        </div>

        <div class="mb-3">
            <label class="form-label" for="email"><b>Email id</b></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="xyz@gmail.com">
            <span id="emailError" class="error-message" style="color: red;font-weight: bold;font-weight: bold;"></span>
        </div>

        <div class="mb-3">
            <label class="form-label" for="password"><b>Password</b></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Your Password">
            <span id="passwordError" class="error-message" style="color: red;font-weight: bold;font-weight: bold;"></span>
        </div>

        <div class="mb-3">
            <label class="form-label" for="confirm-password"><b>Confirm Password</b></label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Your Password">
            <span id="confirmpasswordError" class="error-message" style="color: red;font-weight: bold;font-weight: bold;"></span>
        </div>

        <button type="submit" id="submit_btn" class="btn btn-warning btn-lg" value="signup" disabled>Sign Up</button>
    </form>
    <a href="<?php echo base_url('login') ?>">
        <p style="color: #EEEEEE;text-decoration:dotted;">Already have a account, Click to Log in</p>
    </a>
</div>
<br>
<br>
<footer style="text-align: center;  color: #EEEEEE;">
        Made by Vadiraj⭐
</footer>

<br>
<br>
<script>
    var FIRSTNAME = false;
    var LASTNAME = false;
    var CONTACT = false;
    var EMAILID = false;
    var PASSWORD = false;
    var pass="";
    //First Name Validation 
    $(document).ready(function(){
        $('#fname').keyup(function(){
            validateFname();
        })
        function validateFname() {
            var fname = $('#fname').val();
            var fnamePattern = /^[a-zA-Z]+$/;

            if(!fnamePattern.test(fname)){
                $('#fnameError').text('First name should only have alphabets without any space or numerical value.').css('color', 'red');
           }
            else{
                $('#fnameError').text('Correct Input').css('color', '#68B984');
                FIRSTNAME= true;
            }

        }
    });
    //Last Name Validation
    $(document).ready(function(){
        $('#lname').keyup(function(){
            validateFname();
        })
        function validateFname() {
            var fname = $('#lname').val();
            var fnamePattern = /^[a-zA-Z]+$/;

            if(!fnamePattern.test(fname)){
                $('#lnameError').text('Last name should only have alphabets without any space or numerical value.').css('color', 'red');
           }
            else{
                $('#lnameError').text('Correct Input').css('color', '#68B984');
                LASTNAME = true;
            }

        }
    });
    //Contact Validation 
    $(document).ready(function(){
        $('#contact').keyup(function(){
            validateFname();
        })
        function validateFname() {
            var contact = $('#contact').val();
            var contactPattern = /^(?:\+91\s)?\d{10}$/;

            if(!contactPattern.test(contact)){
                $('#contactError').text('Contact number format 98XXXXXXXX or +91 98XXXXXXXX').css('color', 'red');
           }
            else{
                $('#contactError').text('Correct Input').css('color', '#68B984');
                CONTACT = true;
            }

        }
    });
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
                EMAILID = true;

            }
        }
    });
    // Password Validation
    $(document).ready(function() {
        $('#password').keyup(function() {
            validatePassword();
        });

        function validatePassword() {
            var password = $('#password').val();
            var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&+=!]).{8,}$/;

            if (passwordPattern.test(password)) {

                $('#passwordError').text('Correct input.').css('color', '#68B984');
                pass = password;
                PASSWORD = true;
            } else {
                $('#passwordError').text('Password should contain atleast one uppercase, one lowercase, one numerical & special character. ').css('color', 'red');
                submitButton.prop('disabled', true);
            }
        }
    });

    // Confirm Password Validation
    $(document).ready(function() {
        $('#confirm-password').keyup(function() {
            validatePassword();
        });

        function validatePassword() {
            var confirm_password = $('#confirm-password').val();

            if (confirm_password==pass) {

                $('#confirmpasswordError').text('Correct input.').css('color', '#68B984');

                if(FIRSTNAME && LASTNAME && CONTACT && EMAILID && PASSWORD){
                    const submitButton = document.getElementById('submit_btn');
                    submitButton.removeAttribute('disabled');
                }
                
            } else {
                $('#confirmpasswordError').text('Password doesnt match.').css('color', 'red');
                submitButton.prop('disabled', true);
            }
        }
    });
</script>
</body>
</html>
