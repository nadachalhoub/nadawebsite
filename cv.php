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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Nada Chalhoub</title>
</head>
<body>

<main>
    <section class="left">
        <div class="left-image">
            <img src="me.jpg" width="210" height="auto" alt="">
            <h2 style="color: rgb(244, 240, 245);">Nada Chalhoub</h2>
        </div>
        <div class="personal">
            <ul>
                <li><i class="fas fa-laptop-code fa-xs" style="color: #511f48;"></i> Developer</li>
                <li><i class="fas fa-map-marker-alt fa-xs" style="color: #511f48;"></i> Beirut, Lebanon</li>
                <li>
                    <i class="fas fa-paper-plane fa-xs" style="color: #511f48;"></i>
                    <a href="mailto:nada.chalhoub@lau.edu" style="color: #511f48; text-decoration: none;" target="_blank">nada.chalhoub</a>
                </li>
                <li>
                    <i class="fas fa-phone fa-xs" style="color: #511f48;"></i>
                    <a href="tel:+96170952187" style="color: #511f48; text-decoration: none;" target="_blank">Call me</a>
                </li>
            </ul>
            <hr>
        </div>
            
        <div class="skills">
            <h3><i class="fas fa-cog" style="color: #511f48;"></i> Skills</h3>
            <ul>
                <li><p>Communication</p><div class="pink-progress-bar"><div class="pink-progress" style="width: 95%;"></div></div></li>
                <li><p>Office365</p><div class="pink-progress-bar"><div class="pink-progress" style="width: 85%;"></div></div></li>
                <li><p>Leadership</p><div class="pink-progress-bar"><div class="pink-progress" style="width: 90%;"></div></div></li>
            </ul>
        </div>
        
        <div class="Languages">
            <h3><i class="fas fa-language" style="color: #511f48;"></i> Languages</h3>
            <ul>
                <li><p>Arabic</p><div class="pink-progress-bar"><div class="pink-progress" style="width: 100%;"></div></div></li>
                <li><p>English</p><div class="pink-progress-bar"><div class="pink-progress" style="width: 85%;"></div></div></li>
                <li><p>Français</p><div class="pink-progress-bar"><div class="pink-progress" style="width: 70%;"></div></div></li>
            </ul>
        </div>
        

    </section>
    
    <section class="right">
        <div class="Education">
            <h1>
                <i class="fas fa-user-graduate fa-xs" style="color: #511f48;"></i> Education 
            </h1>
            <ul>
                <li><i class="far fa-file-code fa-xs" style="color: #511f48;"></i>Computer Scientest - LAU</li>
                <li class="date"><i class="fas fa-calendar fa-xs" style="color: #511f48;"></i></i>Jan 2022 - <span class="current">current</span></li>
                <li><p>
                    Seeking a challenging position as a Web Developer in an organization that will contribute to the growth of my career.
                </p></li>
            </ul>

            <ul>
                <li><i class="far fa-lightbulb fa-xs" style="color: #511f48;"></i>Marketing - LU</li>
                <li class="date"><i class="fas fa-calendar fa-xs" style="color: #511f48;"></i></i>September 2022 - <span class="current">current</span></li>
                <li><p>
                    Exploring a rewarding role in the realm of Digital Marketing and SEO, with the aim of joining a forward-thinking company where I can apply my knowledge and abilities to enhance online presence and support the organization's digital expansion.
                </p></li>
            </ul>

            <ul>
                <li><i class="fas fa-school fa-xs" style="color: #511f48;"></i>Al- kawthar School</li>
                <li class="date"><i class="fas fa-calendar fa-xs" style="color: #511f48;"></i>2006 - 2019</li>
                <li><p>
                    Graduated General Science student; I've been driven to powerfully augment my skill set with a combination of programming prowess and strategic marketing expertise.
                </p></li>
            </ul>
        </div>
        <div class="Courses">
    <h1><i class="fas fa-code fa-xs" style="color: #511f48;"></i> Courses</h1>
    <ol class="course-list">
        <li>Web DEVELOPMENT</li>
        <li>Search Engine Optimization</li>
        <li>Java Programming</li>
        <li>Python Programming</li>
        <li>Data Structure & Algorithms</li>
        <li>Operating Systems</li>
        <li>DBMS - MYSQL</li>
        <li>Linear Algebra</li>
        <li>Calculus III</li>
        <li>Operation Research</li>
        <li>Systems Design</li>
        <li>Computer architecture</li>
        <li>Multimedia Systems</li>
    </ol>
</div>

    </section>
</main>

<footer class="footer">
    <p>
        Follow me on Social Media
    </p>
    <i class="fab fa-facebook" style="color: #511f48;"></i>
    <a href="https://www.facebook.com/nada.chalhoub.96">Nada Chalhoub</a>

    <i class="fab fa-instagram" style="color: #511f48;"></i>
    <a href="https://instagram.com/itschalhoub?igshid=NGVhN2U2NjQ0Yg==" class="instagram-link">itschalhoub</a>

    <i class="fab fa-linkedin" style="color: #511f48;" ></i>
    <a href="http://linkedin.com/in/nada-c-68b45a217">Nada Chalhoub</a>

    <p>Copyright 2023<i class="far fa-copyright fa-xs" style="color: #511f48;"></i></p>
    

</footer>

</body>
</html>
