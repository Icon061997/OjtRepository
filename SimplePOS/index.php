<?php
$msg = "";
@include 'main/config.php';

session_start();

if (isset($_POST["submit"])) {

    $usermail = $_POST["username"];
    $usermail = $_POST["email"];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    $conn = mysqli_connect('localhost', 'root', '', 'pointofsale');

    $select = " SELECT * FROM user WHERE email = '$usermail' OR username = '$usermail' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'admin') {

            $_SESSION['admin_name'] = $row['name'];
            header('location:main/dashboard.php');
        } elseif ($row['user_type'] == 'user') {

            $_SESSION[' '] = $row['name'];
            header('location:main/dashboard.php');
        }
    } else {
        $error[] = 'incorrect email or password!';
    }
};


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="main/css/style.css">





</head>

<body>

    <div class="container-fluid">
        <div class="container_box">
            <form action="" method="POST">

                <div class="container">
                    <img src="main/images/logo.png" alt="" class="img-box">
                </div>
                <h4 style="margin: 10px 0px 5px 0px;"><b style="color: #3C91E6;  font-family: 'Poppins', sans-serif;">Ez</b><b style="color: #3C91E6;     font-family: 'Poppins', sans-serif;">Shop </b></b>Admin
                </h4>
                <hr>



                <div class="input-fields inputWithIcon ">
                    <input type="text" name="email" id="email" placeholder="   " required>
                    <label for="email">Username or Email</label>

                </div>
                <div class="input-fields">
                    <input type="password" name="password" id="password" placeholder="  " required>
                    <label for="password">Password</label>
                    <span class="eye" onclick="myFunction()">
                        <i id="hide1" class='bx bx-show'></i>
                        <i id="hide2" class='bx bx-hide'></i>

                    </span>

                </div>
                <input type="submit" value="Login" name="submit" id="btn">

            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");

        if (x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none"
        } else {
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block"
        }
    }
</script>

</html>