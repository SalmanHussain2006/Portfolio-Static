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

    // Email and password retrieved from the form
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$pass'");

    if ($res->num_rows === 1){  // searches for a single match
        $_SESSION['user'] = $email;
        header("Location: addEntry.php");
        exit();
    }
    else{
        header("Location: loginpage.php?error");
        exit();
    }
    $conn->close(); 


?>