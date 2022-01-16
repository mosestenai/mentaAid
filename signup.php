<!DOCTYPE html>
<html lang="en">
<?php
session_start();


?>
<?php include('server.php') ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>https://mentaAid.co.ke/signup</title>
    <link rel="stylesheet" href="style.css">

</head>

<body class="login">
    <form class="form1" method="post">
        <br><br>
        <div class="save">
            <h2>
                <font color="blue">MentaAid!</font>
            </h2>
            <h4>Register Now!!</h4><br>
            <?php include('errors.php'); 
            ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username"><br>
                <br>
                <label>Phone number</label>
                <input type="text" name="phone" placeholder="+2547">
                <br>
                <br>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email Address"><br>
                <br>
                <label>Password</label>
                <input type="password" name="password_1" placeholder="*******"><br><br>
                <label>Confirm Password</label>
                <input type="password" name="password_2" placeholder="*******">
            </div>
            <br>
            <button type="submit" class="loginbtn" name="register_user">Register</button><br><br>

            Have an account? <a href="login.php"><b>
                    <font color="black">Login</font>
                </b></a><br><br>
            <br>
        </div>
    </form>

</body>

</html>