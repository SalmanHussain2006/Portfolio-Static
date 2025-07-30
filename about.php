<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salman Hussain's Portfolio - About</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="about.css">
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

    <div class="container">
        <main>
            <!--About me section-->
            <section class="about" id="about">
                <h1>About Me</h1>
                <div class="content">
                    <aside class="sidebar">
                        <nav>
                            <ul>
                                <li><a href="#about">About me</a></li>
                                <li><a href="#Work Experience">Experience</a></li>
                                <li><a href="#education">Education</a></li>
                            </ul>
                        </nav>
                    </aside>
                    <p>I am a highly motivated and dedicated individual with a strong
                        passion for technology and continuous learning. My academic
                        background in Computer Science at Queen Mary, University of
                        London, has equipped me with technical skills in programming,
                        problem-solving, and a deeper understanding of emerging
                        technologies like AI and machine learning.
                        As a contracted student ambassador, I have developed strong
                        communication and leadership skills, and my involvement in the
                        Machine Learning Society and hackathons has enhanced my
                        teamwork and innovation abilities. I excel both independently
                        and in collaborative settings, and I am eager to apply my
                        technical expertise to real-world challenges, contributing to
                        meaningful advancements in the IT industry.
                    </p>
                    
                    <figure class="profile">
                        <img src="Salman.jpg" alt="">
                        <figcaption>Computer Science Bsc (Hons) | Student Ambassador</figcaption>
                    </figure>
                </div>
            </section>

            <!--Education portion-->
            <section id="Work Experience">
                <h1>Work Experience</h1>
                <p>Student Ambassador (2024-Present)</p>
                <p>Cashier / Front Of House @ Fast Food Restaurant (2023-2025)</p>
            </section>


            <!--Education portion-->
            <section id="education">
                <h1>Education</h1>
                <p>Queen Mary University Of London</p>
                <p>Computer Science Bsc (Hons) (2024-2027)</p>
                <p>Stepney All Saints Sixth Form</p>
                <p>A Level: Maths A, Physics A, Computer Science A, EPQ A (AS) (2022-2024)</p>
            </section>
        </main>
    </div>

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