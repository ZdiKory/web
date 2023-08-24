<!DOCTYPE html>

<html >
<head>
    <meta charset="UTF-8">
    <title> Contact </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="styles/contact.scss">
    <link rel="stylesheet" href="styles/footer.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .navbar {
            left: 405px;
            position: fixed;
            top: 0;
            width: 1110px;
        }
        body{
            background-color:rgba(249, 191, 59,0.3);
        }

    </style>
</head>
<body>
<div class="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">IT JOB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobs.php">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="company.php">Companies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" type="button" href="login.php" data-toggle="modal" >Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" type="button" href="#" data-toggle="modal" >Register</a>
                </li>
            </ul>
        </div>
    </nav>
</div><br>
<div class="container">
    <div class="content">
        <div class="left-side">
            <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one">Surkhet, NP12</div>
                <div class="text-two">Birendranagar 06</div>
            </div>
            <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-one">+0098 9893 5647</div>
                <div class="text-two">+0096 3434 5678</div>
            </div>
            <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">codinglab@gmail.com</div>
                <div class="text-two">info.codinglab@gmail.com</div>
            </div>
        </div>
        <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
            <form action="#">
                <div class="input-box">
                    <input type="text" placeholder="Enter your name">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Enter your email">
                </div>
                <div class="input-box message-box">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>


                </div>
                <div class="button">
                    <input type="button" value="Send Now" >
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<?php
include_once "footer.php";
?>
</html>