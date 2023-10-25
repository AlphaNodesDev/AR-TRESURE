<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: whitesmoke;
            user-select: none;
        }

        .profile-card {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            margin: 0 auto;
            position: relative; 
        }

        .profile-container {
            position: relative;
        }

        .profile-image {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            cursor: pointer; 
        }

        .hidden {
            display: none;
        }

        .overlay-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .profile-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .profile-link {
            text-decoration: none;
            background-color: #ffffff;
            color: #333;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: background-color 0.3s, transform 0.3s;
        }

        .profile-link i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        /* Styling for social media links */
        .profile-link.github {
            background-color: black; /* Change the background color */
            color: #ffffff; /* Change the text color */
        }

        .profile-link.github:hover {
            background-color: #6e6e6e; /* Change the background color on hover */
        }

        .profile-link.linkedin {
            background-color: #0077b5; /* Change the background color */
            color: #ffffff; /* Change the text color */
        }

        .profile-link.linkedin:hover {
            background-color: #004b87; /* Change the background color on hover */
        }

        .profile-link.instagram {
            background-color: #e1306c; /* Change the background color */
            color: #ffffff; /* Change the text color */
        }

        .profile-link.instagram:hover {
            background-color: red; /* Change the background color on hover */
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="profile-container" onclick="showNewImage()">
            <img src="./assets/img/alpha.png" alt="Developer's Profile Image" class="profile-image">
            <img src="./assets/img/the-rock-sus-meme-dwayne-johnson.gif" alt="Another Image" class="hidden overlay-image profile-image" id="newImage">
        </div>
        <h1>Abhiram</h1>
        <h3>Front-End Developer</h3>
        <h3>Back-End Developer</h3>
        <div class="profile-links">
            <a href="https://github.com/AlphaNodesDev/" class="profile-link github">
                <i class="fab fa-github"></i> GitHub
            </a>
            <a href="https://www.linkedin.com/in/c-abhiram-s-578771293?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="profile-link linkedin">
                <i class="fab fa-linkedin"></i> LinkedIn
            </a>
            <a href="https://www.instagram.com/invites/contact/?i=z9s38uydv1qu&utm_content=d1homzs" class="profile-link instagram">
                <i class="fab fa-instagram"></i> Instagram
            </a>
        </div>
    </div>

    <script>
        function showNewImage() {
            const oldImage = document.querySelector(".profile-image");
            const newImage = document.getElementById("newImage");

            newImage.classList.toggle("hidden");

            setTimeout(function() {
                newImage.classList.toggle("hidden");
            }, 4000);
        }
    </script>
</body>
</html>
