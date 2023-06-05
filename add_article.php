<!DOCTYPE html>
<html>
<head>
    <title>Add Article</title>
</head>
<body>
    <h2>Add Article</h2>
    <form method="post" action="save_article.php">
        <label>Title:</label>
        <input type="text" name="title" required><br>

        <label>Content:</label>
        <textarea name="content" required></textarea><br>

        <input type="submit" value="Add Article">
    </form>
</body>
</html>
