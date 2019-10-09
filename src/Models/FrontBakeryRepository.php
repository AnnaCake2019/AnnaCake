<?php


namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\DB;
use Notorious\Shugar\Core\Repository;

class FrontBakeryRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM `front_bakery` ';
        return $this->db->getAll($sql);
    }

    public function getById(int $id)
    {
        $sql = 'SELECT * FROM `front_bakery` WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO `front_bakery` (img) 
        VALUES (:img) ';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function deleteCake($id)
    {
        $sql = 'DELETE FROM `front_bakery` WHERE id=:id ';
        $params = ['id'=>$id];
        return $this->db->nonSelectQuery($sql, $params);
    }
}