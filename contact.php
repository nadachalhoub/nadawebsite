<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('background2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        #up1 {
            background-color: #e9c2c5;
            padding: 10px;
            color: white;
            text-align: center;
            font-size: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #dropdown-menu {
            cursor: pointer;
            line-height: 40px;
            color: #800040;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            font-size: x-large;
            border-bottom: 2px solid rgb(223, 135, 164);
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background: #2e2b2d;
            min-width: 160px;
            z-index: 1;
            font-weight: normal;
            font-size: medium;
            top: 60px;
        }

        #dropdown-menu ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #dropdown-menu li {
            text-align: center;
        }

        #dropdown-menu a {
            text-decoration: none;
            color: rgb(223, 135, 164);
            display: block;
            padding: 10px;
        }

        #dropdown-menu:hover .dropdown-content {
            display: block;
        }

        #dropdown-menu li:hover {
            background: rgb(202, 177, 195);
        }

        .loggedin {
            color: #800040;
            font-family: 'Courier New', Courier, monospace;
        }

        section {
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            width: 100%;
            max-width: 600px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-family: 'Courier New', Courier, monospace;
            color: #cea0aa;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 50px; 
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace;
            color: #fee1dd;
            background-color: white;
            transition: background-color 0.3s, color 0.3s;
        }

        input:focus,
        textarea:focus {
            outline: none;
            background-color: #fee1dd;
            color: white;
        }

        button {
            background-color: rgb(223, 135, 164);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(202, 177, 195);
        }
        .footer{
            background-color: #e9c2c5;
            padding: 0.5rem 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
            font-family: 'Courier New', Courier, monospace;
            
        }

        a.instagram-link {
            color:  #800040; 
        }
        
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function handleSendButtonClick() {
                var fullName = document.getElementById("fullName").value;
                var email = document.getElementById("email").value;
                var message = document.getElementsByName("message")[0].value;
                if (fullName.trim() === "" || email.trim() === "" || message.trim() === "") {
                    alert("Please fill in all the fields.");
                    return;
                }
                alert("Button clicked! Data:\nFull Name: " + fullName + "\nEmail: " + email + "\nMessage: " + message);
            }

            var sendButton = document.getElementById("sendButton");
            if (sendButton) {
                sendButton.addEventListener("click", handleSendButtonClick);
            }

            var dropdownMenu = document.getElementById("dropdown-menu");
            var dropdownContent = document.querySelector(".dropdown-content");

            dropdownMenu.addEventListener("click", function () {
                dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
            });
        });
    </script>
</head>
<body>
    <div id="up1">
        <div id="dropdown-menu">
            <span>MENU</span>
            <div class="dropdown-content">
                <ul>
                    <li><a href="cv.php">CV</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <span class="loggedin">
            Welcome
            <?php echo $_SESSION["email"]; ?>
        </span>
    </div>
    <section>
        <form>
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" id="sendButton">Send</button>
        </form>
    </section>
    <footer class="footer">
    <p>
        Contact me on Social Media
    </p>
    <i class="fab fa-facebook" style="color:  #800040;"></i>
    <a href="https://www.facebook.com/nada.chalhoub.96" class="instagram-link">Nada Chalhoub</a>

    <i class="fab fa-instagram" style="color:  #800040;"></i>
    <a href="https://instagram.com/itschalhoub?igshid=NGVhN2U2NjQ0Yg==" class="instagram-link">itschalhoub</a>

    <i class="fab fa-linkedin" style="color:  #800040;" ></i>
    <a href="http://linkedin.com/in/nada-c-68b45a217" class="instagram-link">Nada Chalhoub</a>

    <p>Chalhoub-2023 <i class="far fa-copyright fa-xs" style="color:  #800040;"></i></p>
</footer>
</body>
</html>
