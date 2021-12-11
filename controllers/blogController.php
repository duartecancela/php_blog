<?php

include("..\classes\Post.php");
include("..\models\PostModel.php");

if($_POST['act'] == 'create_post')
{
    $post = new Post($_POST['date'] = date('d-m-y h:i:s'), $_POST["title"], $_POST["content"], $_POST["categories"]);
    $postModel = new PostModel();
    $postModel->createPost($post);

}

if($_POST['act'] == 'show_posts')
{
    echo "<h1>All Posts</h1>";
}
