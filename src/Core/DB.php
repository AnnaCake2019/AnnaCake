<?php
namespace Notorious\Shugar\Core;


class DB
{
    private $server = 'localhost';
    private $dbName = 'project';
    private $username = 'AnnaCake';
    private $pwd = 'sweet';

    private static $db;
    private $connection;

    private function __construct()
    {
        $this->connection = new \PDO(
            "mysql:host=$this->server;dbname=$this->dbName;charset=UTF8",
            $this->username, $this->pwd,
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
    }

    public static function getDB(){
        if (self::$db == null) self::$db = new DB();
        return self::$db;
    }

    public function getAll($sql){
        $statement = $this->connection->query($sql);
        if (!$statement) return false;
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function nonSelectQuery($sql, $params){
        $statement = $this->connection->prepare($sql);
        if (!$statement) return false;
        return $statement->execute($params);
    }

    public function insertIntoTable($sql, $params){
        $statement = $this->connection->prepare($sql);
        if (!$statement) return false;
        $statement->execute($params);
        return $this->connection->lastInsertId();
    }
    public function paramsGetAll($sql, $params) {
        $statement = $this->connection->prepare($sql);
        if (!$statement) return false;
        $statement->execute($params);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function paramsGetOne($sql, $params){
        $statement = $this->connection->prepare($sql);
        if (!$statement) return false;
        $statement->execute($params);
        return $statement->fetch(\PDO::FETCH_ASSOC);
    }
}