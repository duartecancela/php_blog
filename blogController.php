<?php

include("Post.php");
include("PostModel.php");

if($_POST['act'] == 'create_post')
{
    $post = new Post($_POST['date'] = date('d-m-y h:i:s'), $_POST["title"], $_POST["content"], $_POST["categories"]);
    $postModel = new PostModel();
    $postModel->createPost($post);

}
