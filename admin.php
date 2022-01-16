<?php
session_start();
$df = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
    header('location: login.php');
} elseif ($df != 'main admin') {
    echo "unauthorised access";
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin.mentaid.com</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="body">
        <div class="container">
            <nav class="navbar">
                <div class="hamburger-menu">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>

                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">faq's</a>
                    </li>
                    <li class="nav-item">
                        <a href="story.php" class="nav-link">users</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php"><button class="link">LOGOUT</button></a>
                    </li>
                </ul>
            </nav>
        </div>

        <script src="script.js"></script>
    </body>

    </html>
<?php
}
?>