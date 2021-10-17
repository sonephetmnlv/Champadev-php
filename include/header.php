<?php 
    require_once 'include/server.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChampaDev</title>
    <!-- ---------- Stye Sheet -------------- -->
    <link rel="stylesheet" href="asset/css/style.css">
    <!----------- Font Awesome------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <div id="nav-bar">
        <div class="container">
            <div class="logo">
                <a href="index.php"> ChampaDev</a>
            </div>
            <div class="link-group">
                <div class="hamburger" id="ham-open" onclick="open_link()">
                    <i class="fas fa-bars"></i>
                </div>
                <div class=" hamburger ham-close d-none" id="ham-close" onclick="close_link()">
                    <i class="fas fa-times"></i>
                </div>
                <ul id="links" class="d-none dropdown-group">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="home.php">Course</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a class="signUp" href="login.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
