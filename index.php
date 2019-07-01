<?php
session_start();
if (!isset($_SESSION['access_token'])) {
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <img src="<?php echo $_SESSION["userdata"]["picture"]["url"] ?>" alt="profile image here">
            </div>
            <div class=" col-md-8">
                <table class="table table-hover table-bordered">
                    <tbody>
                        <tr>
                            <td>My FaceBook ID</td>
                            <td><?php echo $_SESSION["userdata"]["id"] ?> </td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td><?php echo $_SESSION["userdata"]["first_name"] ?> </td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><?php echo $_SESSION["userdata"]["last_name"] ?> </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $_SESSION["userdata"]["email"] ?> </td>
                        </tr>
                    </tbody>
                </table>
                <pre>    <h3 align="center" style="color:darkblue">My FaceBook Profile Info</h3></pre>

            </div>

        </div>

    </div>
</body>

</html>