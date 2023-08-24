<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | CodingLab</title>
    <link rel="stylesheet" href="styles/log.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>


</head>
<body>



<div class="container">
    <div class="wrapper">
        <div class="title"><span>Login User</span></div>
        <form action="#">
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email or Phone" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required>
            </div>
            <div class="pass"><a href="#">Forgot password?</a></div>
            <div class="row button">
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
            <div class="signup-link">Log in to your company <a href="logincomp.php">Company login</a></div>
        </form>
    </div>

</div>

</div>
</body>
</html>