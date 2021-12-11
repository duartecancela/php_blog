<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Post</title>
</head>
<body>
<?php
    require_once __DIR__ . '\..\models\PostModel.php';
    $postModel = new PostModel();
    $id = $_GET['id'];
    $statement = $postModel->showPost($id);
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo "<h1> {$data[0]['title']}</h1>";
?>
</body>
</html>


