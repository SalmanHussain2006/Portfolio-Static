<?php
    session_start();

    // Connect to db
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "ecs417";

    // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checks connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Getting all posts 
    $res = $conn->query("SELECT * FROM posts");
    $allPosts = $res->fetch_all(MYSQLI_ASSOC); // gets all rows and puts in an associative array

    // sorting algorithm
    function sortPostsByDateDescending($posts) {
        usort($posts, function ($a, $b) {
            $dateA = strtotime($a['post_date']);
            $dateB = strtotime($b['post_date']);
            return $dateB - $dateA; // descending order: newest first
        });
        return $posts;
    }
    $allPosts = sortPostsByDateDescending($allPosts);

    $selectedMonth = isset($_POST['month']) ? $_POST['month']: ""; // stores selected month from user in the variable
    
    // Filter by month selected
    $posts = $allPosts;
    if ($selectedMonth !=""){ // if the selected drop down isnt a month show all posts
        $posts = [];
        foreach ($allPosts as $post){
            $monthName = date('F', strtotime($post['post_date'])); // in word format for date rather than number e.g 17/04/2025 -> 17th April 2025
            if ($monthName === $selectedMonth){
                $posts[] = $post;
            }
        }
    } 
    
    // Gets all the months within the post 
    $months = [];
    foreach ($allPosts as $post){ // looping through each post within all the posts
        $month = date('F', strtotime($post['post_date']));
        if (!in_array($month, $months)){ // adding to months array if its already not in the month array
            $months[] = $month; 
        }
    }
    
    $monthOrder = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Decemeber'];
    usort($months, function ($a, $b) use ($monthOrder){
        return array_search($a, $monthOrder) - array_search($b, $monthOrder);
    });
    date_default_timezone_set('UTC');

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salman Hussain's Portfolio - Blog</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="viewBlog.css">
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
        <!--Blog section-->
        <section class="blog-container">
            <div class="posts-container">
            <form method="POST" class="filter-form">
                <label for="month">Filter By Month:</label>
                <select name="month" id="month">
                    <option value="">Show All</option> <!-- Default is show all on drop down-->
                    <?php foreach ($months as $month): ?>
                        <option value="<?php echo $month; ?>" <?php echo ($selectedMonth === $month) ? 'selected' : ''; ?>>
                            <?php echo $month; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit">Filter</button>
            </form>

                <?php foreach ($posts as $post):?>
                    <article class="blog">
                        <?php
                            $dateFormatted = date("jS F Y, g:i A", strtotime($post['post_date']));
                        ?>
                        <div class="post-header">
                            <p class="date"><?php echo $dateFormatted . " UTC"?></p>
                        </div>  
                        <h2><?php echo $post['title']?></h2>
                        <p class="content"><?php echo $post['content']?></p>
                    </article>
                <?php endforeach; ?>
            </div>     

            <!--Sidebar section-->
            <aside class="sidebar">
                <h3>Manage Blog</h3>
                <?php if (!isset($_SESSION['user'])): ?>
                    <a href="loginpage.php" class="button">Login</a>
                <?php endif; ?>
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="addEntry.php" class="button">Add Post</a>
                <?php endif; ?>
                <?php if (!isset($_SESSION['user'])): ?>
                    <a href="loginpage.php" class="button">Add Post</a>
                <?php endif; ?>
            </aside>
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