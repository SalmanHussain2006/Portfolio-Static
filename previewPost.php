<?php
    session_start();
    $title = $_POST['title'];
    $content = $_POST['content'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salman Hussain's Portfolio - Preview Post</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="previewPost.css">
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
    <!--Script-->
    <script src="script.js" defer></script>
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

    <!-- Main content -->
    <main class="blog-container">
        <div class="posts-container">
            <article class="blog">
                    <div class="post-header">
                        <p class="date">Preview (Not Posted Yet)</p>
                    </div>
                    <h2><?php echo $title; ?></h2>
                    <p class="content"><?php echo $content; ?></p>
            </article>

            <div class="button-container">
                    <!-- Confirm Post -->
                    <form action="addPost.php" method="post">
                        <input type="hidden" name="title" value="<?php echo $title; ?>">
                        <input type="hidden" name="content" value="<?php echo $content; ?>">
                        <button type="submit">Confirm and Post</button>
                    </form>

                    <!-- Go back to edit -->
                    <form action="addEntry.php" method="post">
                        <input type="hidden" name="title" value="<?php echo $title; ?>">
                        <input type="hidden" name="content" value="<?php echo $content; ?>">
                        <button type="submit">Go Back and Edit</button>
                    </form>
            </div>
        </div>
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