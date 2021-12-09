<?php
include("DbClass.php");

class PostModel
{
    private function connect(){
        $dbConnection = new DbClass();
        return $dbConnection->connect();;
    }

    public function createPost(Post $post){

        $name = $post->getName();
        $number = $post->getNumber();
        $email = $post->getEmail();
        $program = $post->getProgram();

        $conn = $this->connect();
        $sql = "INSERT INTO student(name, number, email, program) VALUES ('$name', $number, '$email', '$program')";

        if ($conn->query($sql)) {
            $last_id = $conn->lastInsertId();
            echo "New record created successfully. Last inserted ID is: " . $last_id . "." . "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->errorCode();
        }
    }

}