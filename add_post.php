<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form name="create_form" action="blogController.php" method="post">
        <input type="hidden" name="act" value="create_post"/>
        <label>Blog Title</label><br>
        <input type="text" name="title"><br>
        <label>Blog Content</label><br>
        <input type="text" name="content"><br>
        <label for="categories">Categories</label><br>
            <?php
                require_once __DIR__ . '/DbClass.php';
                $dbConnection = new DbClass();
                $con = $dbConnection->connect();
                $sql = "SELECT * FROM categories";
                $statement = $con->query($sql);
                $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo '<select name="categories" id="categories">';

                foreach ($con->query($sql) as $row) {
                    echo $row["name"] . '<br>';
                    echo "<option value=" . $row["id"] . ">" . $row["name"]. "</option>";
                }
            ?>
        </select>
        <input type="submit">
    </form>
</body>
</html>