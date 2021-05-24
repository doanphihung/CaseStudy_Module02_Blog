<?php
// Đã require ở file require.php

class PostModel
{
    protected $connection;

    public function __construct()
    {
        $connection = new Database();
        $this->connection = $connection->connect();
    }

    public function getThreePostsLatest()
    {
        $sql = "SELECT * FROM posts p JOIN users u ON p.user_id = u.user_id ORDER BY created_at DESC LIMIT 3";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();

        return $results;


    }

    public function getAllPosts()
    {
        $sql = "SELECT * FROM posts p JOIN users u ON p.user_id = u.user_id  ORDER BY created_at DESC";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();

        return $results;


    }

    public function getDetails($id)
    {
        $sql = "SELECT * FROM posts p JOIN users u ON p.user_id = u.user_id  WHERE p.id = ? ";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $results = $statement->fetch();

        return $results;


    }

    public function searchTitle($title)
    {
        $sql = "SELECT * FROM posts p JOIN users u ON p.user_id = u.user_id WHERE p.title LIKE '%$title%'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll();
    }

}
