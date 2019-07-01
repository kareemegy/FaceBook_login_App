<?php

require_once "config.php";
if (isset($_SESSION['access_token'])) {
    header("Location:index.php");
    exit();
}
$redirectURL = "http://localhost/facebook_login_app/fb-callback.php";
$prmission =  ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $prmission);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" algin="center">
                <pre><h2>FaceBook Login App</h2></pre>
                <form>
                    <input type="email" name="email" placeholder=" Enter your Email" class="form-control"><br>
                    <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
                    <input type="submit" value="Log In" class="btn btn-danger">
                    <span> OR </span>
                    <input type="button" onclick="window.location='<?php echo $loginURL ?> ' " value="Log In With facebook" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>

</html>