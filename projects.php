<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salman Hussain's Portfolio - Projects</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="projects.css">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 768px)">
    <!--Font section-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Grechen+Fuemen&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sigmar&family=Sigmar+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Grechen+Fuemen&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Pacifico&family=Sigmar&family=Sigmar+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Grechen+Fuemen&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Madimi+One&family=Pacifico&family=Sigmar&family=Sigmar+One&display=swap" rel="stylesheet">

</head>
<body>
    <!--Header of the page-->
    <header class="top">
        <a href="index.php"><h1>Salman Hussain</h1></a>
        <nav>
            <ul>
                <li><a href="viewBlog.php">Blog</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <!--Projects section-->
        <section id="projects">
            <h2>My Projects</h2>

            <!-- First Project -->
            <article class="project">
                <h3>Project 1: Student Productivity Hub</h3>
                <p>This project involved creating a Student Productivity Hub using Notion. The design included features such as 
                    a habit tracker, journal section, finance tracker, job application tracker, coursework tracker, and a customizable calendar that could sync with personal schedules.
                    It won the Best Pitch Award at this hackathon.
                </p>
                <a href="https://www.linkedin.com/posts/activity-7271340348876963841-xHed?utm_source=share&utm_medium=member_desktop&rcm=ACoAAFMOFpIBmv31lkVPkxcyPbMqJyL-T0U--DQ">View this project on LinkedIn</a>
            </article>

            <!-- Second Project -->
            <article class="project">
                <h3>Project 2: Image Classification System</h3>
                <p>This project involved designing and building a Convolutional Neural Network (CNN) system capable of analyzing images and determining whether they contain 'Santa' or 'Not Santa'. 
                    It achieved an accuracy of 87.99% and secured 3rd place at our first QMUL mini hackathon.
                </p>
                <a href="https://github.com/SalmanHussain2006/SALMAN-HUSSAIN-CHRISTMAS-HACKATON">View this project on GitHub</a>
            </article>
        </section>
    </main>


    <!--Footer of the page-->
    <footer>
        <p>&copy; 2025 Salman Hussain</p>
        <div class="social">
            <a href="https://www.linkedin.com/in/salman-hussain-46a7a832a/"><img src="linkedin.png" alt="LinkedIn"></a>
            <a href="https://github.com/SalmanHussain2006"><img src="github.png" alt="GitHub"></a>
        </div>
    </footer>
</body>
</html>