<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="main.css">
    <style>
        body {
            margin: 0;
            background: url('background1.jpg') fixed;
            background-size: cover;
        }
    </style>

</head>
<body style="background-color:black">
    <div class ="up" id="up1">
        <div id="dropdown-menu">
            <span style="margin-left: 5px;">MENU</span>
            <div class=" dropdown-content">
                <ul>
                    <li>
                        <a href="cv.php">CV</a>
                    </li>
                    <li>
                        <a href="gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="Logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <span class="loggedin">
            Welcome
            <?php echo $_SESSION["email"]; ?>
        </span>
    <div class="content">
        <div>
           <h1 class="site">Its Chalhoub WEBSITE</h1>
        </div>
    </div>
</body>
</html>
