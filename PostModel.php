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
        $category = $post->getCategory();

        $conn = $this->connect();
        $sql = "INSERT INTO posts(date, title, content, category) VALUES ('$date', '$title', '$content', '$category')";

        // insert data in database
        if ($conn->query($sql)) {
            $last_id = $conn->lastInsertId();
            echo "New record created successfully. Last inserted ID is: " . $last_id . "." . "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->errorCode();
        }
    }

}