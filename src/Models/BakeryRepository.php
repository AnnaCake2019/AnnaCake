<?php


namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\DB;
use Notorious\Shugar\Core\Repository;

class BakeryRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getAll()
    {
        // возвращает все тортики
        $sql = 'SELECT * FROM bakery';
        return $this->db->getAll($sql);
    }

    public function getById(int $id)
    {
        // получаем тортики по id
        $params = ['id'=>$id];
        $sql = 'SELECT * FROM bakery WHERE id=:id';
        return $this->db->paramsGetOne($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO bakery 
                (title, description, img, price)
                VALUES (:title, :description, :img, :price)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function deleteCake($params)
    {
        $sql = 'DELETE FROM bakery WHERE id=:id';
        return $this->db->nonSelectQuery($sql, $params);
    }
}