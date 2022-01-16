<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php
session_start();
require 'config.php';
//login user
if (isset($_POST['login_user'])) {
    //get inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    //display error message if fields are empty
    if (empty($username)) {
        array_push($errors, "Enter a valid username");
    }
    if (empty($password)) {
        array_push($errors, "Enter password");
    }

    //continue if there are no errors
    if (count($errors) == 0) {

        $sql = "SELECT * FROM admin WHERE username='$username'";
        $sql2 = "SELECT * FROM users WHERE username='$username'";

        $result1 = $db->query($sql);
        $result2 = $db->query($sql2);

        if ($result1->rowCount() == 1) {
            $user = $result1->fetch(PDO::FETCH_OBJ);
            if (password_verify($password, $user->password) == 1) {
                $_SESSION['username'] = $username;
                header('location: admin.php');
            }
        } else if ($result2->rowCount() == 1) {
            $user = $result2->fetch(PDO::FETCH_OBJ);
            if (password_verify($password, $user->password) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: user.php');
            }
        } else {
            array_push($errors, 'Wrong username or password.<br><br>Forgotten your password?<br>
            <a href="reset pass.php"><font color="blue">Click Here</font></a>');
        }
    }
}


//register user
if (isset($_POST['register_user'])) {
    $username = $_POST['username'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (empty($username)) {
        array_push($errors, "Enter a valid username");
    }
    if (empty($password_1)) {
        array_push($errors, "Password field is empty");
    }
    if (empty($email)) {
        array_push($errors, "Enter a valid email address");
    }
    if (empty($phone)) {
        array_push($errors, "Enter phone number");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "Passwords entered do not match");
    }


    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $db->query($sql);

    //check if username or email entered already exists in the database
    if ($result->rowCount() == 1) {
        $user = $result->fetch(PDO::FETCH_OBJ);
        if ($user->username == $username) {
            array_push($errors, "Username already exists");
        }
        if ($user->email == $email) {
            array_push($errors, "Email already exists");
        }
    }
    //insert data into the database if there are no errors
    if (count($errors) == 0) {
        $password = password_hash($password_1, PASSWORD_DEFAULT, array('cost' => 9)); //encrypt the password before saving in the database

        $sql2 = "INSERT INTO users (username,password,email,phone) 
            VALUES('$username','$password','$email','$phone')";
        $db->query($sql2) or die($db->error);

        header('location: user.php');
    }
}

?>