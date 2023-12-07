<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["Fullname"], $_POST["email"], $_POST["pass"], $_POST["sex"], $_POST["birthdate"])) {
        $fullName = $_POST["Fullname"];
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $sex = $_POST["sex"];
        $birthdate = $_POST["birthdate"];

        if (empty($fullName) || empty($email) || empty($password) || empty($sex) || empty($birthdate)) {
            echo '<script>
            alert("Fill all the following fields.");';
            echo 'window.location.href = "SignUp.html";
            </script>';
        } 
        else {
            $jsonFile = "accounts.json";
            if (!file_exists($jsonFile)) {
                if (file_put_contents($jsonFile, '[]') !== false) {
                    echo '<script>alert("User data file created successfully.");</script>';
                } 
                else {
                    echo '<script>alert("Error creating user data file.");</script>';
                    echo "Debug: " . json_last_error_msg(); 
                }
            }

            $users = json_decode(file_get_contents($jsonFile), true);
            $userData = [
                "Fullname" => $fullName,
                "email" => $email,
                "pass" => $password,
                "sex" => $sex,
                "birthdate" => $birthdate
            ];

            $users[] = $userData;
            if (file_put_contents($jsonFile, json_encode($users, JSON_PRETTY_PRINT)) !== false) {
                echo '<script>
                window.location.href = "index.php";
                </script>';
                exit();
            } else {
                echo '<script>
                alert("Error!");
                </script>';
            }
        }
    } 
    else {
        echo '<script>alert("Invalid Submission!");';
        echo 'window.location.href = "SignUp.html";</script>';
    }
}
?>