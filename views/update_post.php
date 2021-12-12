<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Post</title>
</head>
<body>
<h1>Create Post</h1>
<form name="update_form" action="../controllers/blogController.php" method="post">
    <input type="hidden" name="act" value="update_post"/>
        <?php
        require_once __DIR__ . '..\..\models\PostModel.php';
        $postModel = new PostModel();
        $id = $_GET['id'];
        $statement = $postModel->showPost($id);
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo "<input type='hidden' name='id' value='$id'/>";
        echo "<label>Blog Title</label><br>";
        echo "<input type='text' name='title' value='{$data[0]['title']}'><br>";
        echo "<label>Blog Content</label><br>";
        echo "<input type='text' name='content' value='{$data[0]['content']}'><br>";
        ?>
    <label for="categories">Categories</label><br>
    <?php
        require_once __DIR__ . '..\..\models\DbClass.php';
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
        echo "<option selected='selected'>3</option>";
    ?>
    </select>
    <button name="submit" type="submit" value="">Update Post</button>
</form>
<a href="..\index.php">Home</a>
</body>
</html>