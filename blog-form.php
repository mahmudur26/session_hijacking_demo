<!DOCTYPE html>
<html>
<head>
    <title>Type your blog here</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Insert Blog</h2>
<form method="POST" action="insert_bog.php">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" required><br><br>

    <label for="description">Description</label>
    <textarea id="description" name="description" cols="30" rows="10"></textarea><br><br>

    <input type="submit" value="Post">
</form>

</body>
</html>
