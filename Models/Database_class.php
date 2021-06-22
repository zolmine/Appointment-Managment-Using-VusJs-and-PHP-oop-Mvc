<?php

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'rdv';
    public $connect;


    public function getConnect(): ?PDO
    {
        $this->connect = null;

        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
            $this->connect = new PDO($dsn, $this->user, $this->pass);
            $this->connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "connection Error" . $exception->getMessage();
        }

        return $this->connect;
    }

    public function num_rows($array): int|string
    {
        return mysqli_stmt_num_rows($array);
    }
}