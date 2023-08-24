<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration user </title>
    <link rel="stylesheet" href="styles/register.scss">

</head>
<body>


<div class="wrapper">
    <h2>Registration</h2>
    <form action="#">
        <div class="input-box">
            <input type="text" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Create password" required>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Confirm password" required>
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter your biography" required>
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter your phone number" required>
        </div>

        <div class="policy">
            <input type="checkbox">
            <h3>I accept all terms & condition</h3>
        </div>

        <div class="input-box button">
            <input type="Submit" value="Register Now">
        </div>
        <div class="text">
            <h3>Already have an account? <a href="#">Login now</a></h3>
        </div>
        <div class="text">
            <h3>Register your company <a href="registercomp.php">HERE</a></h3>
        </div>
    </form>
</div>
</body>
</html>