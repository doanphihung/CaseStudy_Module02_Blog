<?php
class UserModel
{
    protected $connection;

    public function __construct()
    {
        $connection = new Database();
        $this->connection = $connection->connect();
    }

    public function checkLogin($email, $password)
    {
        $sql = "SELECT email, password FROM users WHERE email = ? AND password = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $email);
        $statement->bindParam(2, $password);
        return $statement->execute();

    }

    public function insertBlog($userID, $title, $body)
    {
        $sql = "INSERT INTO posts(user_id, title, body) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $userID);
        $statement->bindParam(2, $title);
        $statement->bindParam(3, $body);
        return $statement->execute();

    }

    public function insertUser($userName, $email, $password)
    {
        $sql = "INSERT INTO users(username, email, password) VALUES ('$userName', '$email', '$password')";
        $statement = $this->connection->prepare($sql);
        return $statement->execute();
    }

    public function deletePost($id)
    {
        $sql = "DELETE FROM posts WHERE id = '$id'";
        $statement = $this->connection->prepare($sql);
        return $statement->execute();
    }
}
