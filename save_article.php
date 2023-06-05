<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "herbal_website";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Get article data from the form
$title = $_POST['title'];
$content = $_POST['content'];
$author_id = $_POST['author_id'];

// Sanitize the input
$title = mysqli_real_escape_string($conn, $title);
$content = mysqli_real_escape_string($conn, $content);

// Insert the article into the database
$query = "INSERT INTO articles (title, content) VALUES ('$title', '$content')";

if (mysqli_query($conn, $query)) {
    echo "Article added successfully.";
} else {
    echo "Error adding article: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
