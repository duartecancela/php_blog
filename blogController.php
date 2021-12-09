<?php

include("Post.php");

if($_POST['act'] == 'create_post')
{
    $post = new Post($_POST['date'] = date('d-m-y h:i:s'), $_POST["title"], $_POST["content"], $_POST["categories"]);
    print_r($post->getDate());
    print_r($post->getTitle());
    print_r($post->getContent());
    print_r($post->getCategory());
}
