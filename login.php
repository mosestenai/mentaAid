<?php
session_start();


?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>https://mentaAid.co.ke/login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login">
    <form class="form1" method="post">
        <br><br>
        <div class="save">
            <h2>
                <font color="blue">Welcome !</font>
            </h2>
            <h4>Whatsapp Chat at <br> +254 745 756092</h4>
            <?php include('errors.php'); 
            ?><br>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="username"><br>
                <br>
                <label>Password</label>
                <input type="password" name="password" placeholder="*******">
            </div>
            <br>
            <button type="submit" class="loginbtn" name="login_user">Sign In</button>
            <h4>Forgot password?</h4>
            Don't have an account? <a href="signup.php"><b>
                    <font color="black">Create an Account</font>
                </b></a><br><br>
            <br>
        </div>
    </form>

</body>

</html>