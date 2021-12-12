<?php

include("..\classes\Post.php");
include("..\models\PostModel.php");

if($_POST['act'] == 'create_post')
{
    $post = new Post($_POST['date'] = date('d-m-y h:i:s'), $_POST["title"], $_POST["content"], $_POST["categories"]);
    $postModel = new PostModel();
    $postModel->createPost($post);

}

if($_POST['act'] == 'delete_post')
{
    $postModel = new PostModel();
    $postModel->deletePost($_POST["id"]);
    echo "<h1>Post Deleted id: </h1>" . "<h1> {$_POST["id"]} </h1>";
}
