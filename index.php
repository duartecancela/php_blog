<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Post</title>
</head>
<body>
<h1>Show Posts</h1>
    <?php
        require_once __DIR__ . '/PostModel.php';
        $postModel = new PostModel();
        $statement = $postModel->index();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $row) {
            echo "<h1>" . $row["title"]. "</h1>";
            echo "<p>" . $row["content"]. "</p>";
            echo "<hr>";
        }
    ?>
</body>
</html>