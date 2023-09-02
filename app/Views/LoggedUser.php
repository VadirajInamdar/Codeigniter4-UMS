<?php
$sessionMessage = session()->getFlashdata('session_message');
if (!empty($sessionMessage)) {
    echo "<script>alert('$sessionMessage')</script>";
}
?>
<!-- <h1>Logged User</h1> -->
<style>
    .card {
        width: 450px;
        display: flex;
    }
    .container{
        margin-top: 250px;
        margin-bottom: 50px;
    }
</style>
<?php

$fname = session()->get('fname');
$lname = session()->get('lname');
$contact = session()->get('contact');
$email = session()->get('email');
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8afb14104e.js" crossorigin="anonymous"></script>
    <title><?php echo $fname; ?>'s Info</title>
    <style>
        .card {
            box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
            transition: 0.4s;
            color: #EEEEEE;
            background-color: #176B87;
        }
        body{
        background-color: #053B50;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="card mx-auto">
            <div class="card-header">
                <h3 style="text-align: center;"><?php echo $fname; ?> 's Details</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-user"></i> <?php echo $fname . ' ' . $lname ?></h5>
                <h5 class="card-title"><i class="fa-regular fa-envelope"></i> <?php echo $email; ?></h5>
                <h5 class="card-title"><i class="fa-solid fa-phone"></i> <?php echo $contact; ?></h5>
                <div style="text-align:center"><a href="<?php echo base_url('login'); ?> " class="btn btn-danger">Log out</a></div>
            </div>
        </div>
    </div>
    <footer style="text-align: center; color: #EEEEEE;">
        Made by Vadiraj⭐
    </footer>


</body>

</html>