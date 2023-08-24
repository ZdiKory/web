
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="styles/index.css">
<link rel="stylesheet" type="text/css" href="styles/navigation.scss">
<link rel="stylesheet" type="text/css" href="styles/footer.scss">
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">IT JOB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                    <a class="nav-link btn btn-danger text-white" type="button" href="register.php" data-toggle="modal" >Register</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

    <div class="width-100 banner-section">
        <div class="container">
            <h1 class="banner-heading">Find The Best Job For Your Future</h1>
            <p class="banner-para">its a long established fact that a reader will be distracted by the readable</p>
            <div class="search-sect">
                <input type="text" class="search-textbox" placeholder="Search Company">
            </div>
            <div class="search-sect">
                <input type="text" class="search-textbox" placeholder="Select Location">
                <i class="fa fa-life-ring icons" aria-hidden="true"></i>
            </div>
            <div class="search-sect">
                <input type="text" class="search-textbox" placeholder="All categories">
                <i class="fa fa-caret-down icons" aria-hidden="true"></i>
            </div>
            <div class="search-sect">
                <button class="search-button">
                    <i class="fa fa-search " aria-hidden="true"></i> Search Here </button>
            </div>
        </div>
    </div>


</body>
<?php
include_once "footer.php";
?>
</html>
