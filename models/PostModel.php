<?php
include("DbClass.php");

class PostModel
{
    private function connect(){
        $dbConnection = new DbClass();
        return $dbConnection->connect();;
    }

    public function createPost(Post $post){

        $date = $post->getDate();
        $title = $post->getTitle();
        $content = $post->getContent();
        $category_id = $post->getCategoryId();

        $conn = $this->connect();
        $sql = "INSERT INTO posts(date, title, content, category_id) VALUES ('$date', '$title', '$content', '$category_id')";

        // insert data in database
        if ($conn->query($sql)) {
            $last_id = $conn->lastInsertId();
            echo "New record created successfully. Last inserted ID is: " . $last_id . "." . "<br>";
            echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->errorCode();
        }
    }

    public function index()
    {
        $con = $this->connect();
        $sql = "SELECT * FROM posts";

        return $con->query($sql);
    }

    public function updatePost($id)
    {

    }

    public function showPost($id)
    {
        $con = $this->connect();
        $sql = "SELECT * FROM posts WHERE id = '$id'";
        return $con->query($sql);

    }

    public function deletePost($id)
    {
        $con = $this->connect();
        $sql = "DELETE FROM posts WHERE id = '$id'";
        return $con->query($sql);
    }

}