<?php
session_start();

function authenticateUser($email, $password) {
    $accounts = json_decode(file_get_contents('accounts.json'), true);

    foreach ($accounts as $account) {
        if ($account['email'] == $email && $account['pass'] == $password) {
            $_SESSION['email'] = $account['email'];
            return true;
        }
    }

    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (authenticateUser($email, $password)) {
        header("Location: main.php");
        exit();
    } else {
        echo '<script>alert("Invalid username or password!");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="form1.css">
    <style>
        body {
            margin: 0;
            background: url('background.jpg') fixed;
            background-size: cover;
        }

        .parallax {
            height: 300px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .title {
            text-align: center;
            margin-top: 80px;
            color: white;
        }

        .par {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 20px;
            margin: 50px auto;
            width: 50%;
        }

        #login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #un,
        #pass {
            width: 60%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .buttonn {
            width: 40%;
            padding: 10px;
            margin-top: 10px;
            background-color: hsl(248, 53%,58%);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="parallax"></div>

    <div class="title">
        <h1>Login</h1>
    </div>

    <div class="par">
        <form action="" method="POST" id="login-form">
            <label for="un">Username</label>
            <br>
            <input type="text" name="email" id="un" placeholder="Enter your email">
            <br><br>
            <label for="pass">Password</label>
            <br>
            <input type="password" name="password" id="pass" placeholder="Enter your password">
            <br><br>
            <input type="submit" value="Login" class="buttonn">
            <input type="button" value="Cancel" class="buttonn" onclick="ClearForm()">
        </form>
        <span>No Account:</span> <a href="SignUp.html">Sign Up</a>
    </div>

    <script>
        function ClearForm() {
            document.getElementById("un").value = "";
            document.getElementById("pass").value = "";
        }
    </script>
</body>
</html>
