<!DOCTYPE html>
<html lang="en">

<head>
    <title>USTH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="OurCss/ourStyle.css">
    <link rel="stylesheet" href="OurCss/signup.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="OurJs/OurScript.js"></script>

</head>
<body>
        <div class="signup-form">
            <form action="includes/signup.inc.php" method="POST">
                <h2>Sign up</h2>
                <hr>
                <div class="form-group">
                    <input type="email" class="form-control" name="mail" placeholder="Email" value="<?php echo isset($_GET['mail']) ? $_GET['mail'] : '' ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo isset($_GET['username']) ? $_GET['username'] : '' ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pwd-repeat" placeholder="Repeat Password">
                </div>
                <div class="form-group">
                    <label class="checkbox-inline"><input type="checkbox"> I accept the <a href="#">Term of Use</a> and <a href="#">Privacy Policy</a></label>
                </div>
                <div class="form-group">
                        <button type="submit" name="signup-submit" class="btn btn-primary btn-lg">Sign up</button>
                </div>
                
            </form>
        </div>
</body>



<footer class="wn-footer">
    <div class="container text-center">
        <br>
        <p>This is a web page for studying only by DuyL@i at <a href="https://www.usth.edu.vn/">USTH</a></p>
        <p>
            <a href="#">Back to top</a>
        </p>

        <img src="images/logo.png" class="img-responsive img-square margin" style="display:inline" alt="usth" width="200">
        <br>

        <br>
</footer>

</body>

</html>

<body>