<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["email"];
    $password = $_POST["password"];
    $jsonFile = "accounts.json";
    if (file_exists($jsonFile)) {
        $users = json_decode(file_get_contents($jsonFile), true);
        foreach ($users as $user) {
            if ($user["email"] == $username && $user["pass"] == $password) {
                $_SESSION["email"] = $username;
                header("Location: cv.php");
                exit();
            }
        }
    }
    echo '<script>alert("Invalid username-password! Else Sign up;");';
    echo 'window.location.href = "index.php";</script>';
    exit();
}
?>