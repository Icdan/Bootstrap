<?php
session_start();

$apiLogin = "https://codefest.wssl.eu/api/login/";
$apiCheckRank = "https://codefest.wssl.eu/api/getrankbypersoonid/";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);

    $result = file_get_contents($apiLogin . $email . "/" . $password . "/");
    $result = json_decode($result, true);
    if ($result["status"] == 200) {
        $_SESSION["loggedin"] = $result["data"]["ID"];
        $_SESSION["userdata"] = $result["data"];
    }
}

if (isset($_SESSION['loggedin'])) {

    $rank = file_get_contents($apiCheckRank . $_SESSION['loggedin'] . "/");
    $rank = json_decode($rank, true);
    if ($rank["data"]["0"]["ID"] == 3) {
        header("Location:  home.php");
    } elseif ($rank["data"]["0"]["ID"] == 2) {
        header("Location: index.php");
    } elseif ($rank["data"]["0"]["ID"] == 1) {
        header("Location: dashboard.php");
    } else {
        header("Location: index.php");
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <?php
    include "include/header.php";
    ?>

    <title>Login</title>
</head>
<body>
<div id='loginContainer' class='col-sm-4 mx-auto'>
    <form method='post'>
        <div class='form-group'>
            <label>Email adres</label>
            <input type='email' name='email' class='form-control' placeholder='Email adres'>

        </div>
        <div class='form-group'>
            <label>Password</label>
            <input type='password' name='password' class='form-control' placeholder='Password'>
        </div>
        <input type='submit' class='btn btn-primary' id='loginBtn' value='Submit'/>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>