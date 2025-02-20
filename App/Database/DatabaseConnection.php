<?php

class DatabaseConnection{

    public static $instance = null;
    private PDO $pdo;

    private function __construct()
    {

        $username = "mysql";
        $dbname = "freelanceedgedb";
        $host = "localhost";
        $password = "123123321321@instance";

        $dsn = "pgsql:host=$host;dbname=$dbname";

        try{

            $this -> pdo = new PDO($dsn, $username, $password);

        }catch(PDOException $e){
            echo "Error" . $e -> getMessage();
        }

    }

    public static function getInstance():PDO{
        if (self::$instance === null) {
           self::$instance = new self();
        }
        return self::$instance->pdo;
    }

}

















