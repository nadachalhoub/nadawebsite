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
    <title>Gallery</title>
    <link rel="stylesheet" href="gallery.css" />
    <style>
        .loggedin {
            position: absolute;
            top: 12px;
            right: 13px;
            text-align: right;
            font-family: Arial;
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
    </div>
    <div class="gallery" id="galleryview">
    </div>

    <script>
        fetch('galleryinfo.json')
            .then(response => response.json())
            .then(data => {
                const galleryContainer = document.getElementById('galleryview');
                data.images.forEach((imageName, index) => {
                    const thumbnailDiv = document.createElement('div');
                    thumbnailDiv.className = 'thumbnail';
                    thumbnailDiv.innerHTML = `
                        <a href="#image${index + 1}">
                            <img src="${imageName}" />
                        </a>
                    `;
                    galleryContainer.appendChild(thumbnailDiv);

                    const lightboxDiv = document.createElement('div');
                    lightboxDiv.id = `image${index + 1}`;
                    lightboxDiv.className = 'lightbox';
                    lightboxDiv.innerHTML = `
                        <a href="#close" class="close-btn">×</a>
                        <img src="${imageName}" />
                    `;
                    galleryContainer.appendChild(lightboxDiv);
                });
            });
    </script>
</body>

</html>