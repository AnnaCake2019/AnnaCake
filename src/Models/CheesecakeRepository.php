<?php


namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\DB;
use Notorious\Shugar\Core\Repository;

class CheesecakeRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getAll()
    {
        // возвращает все тортики
        $sql = 'SELECT * FROM cheesecakes';
        return $this->db->getAll($sql);
    }

    public function getById(int $id)
    {
        // получаем тортики по id
        $params = ['id'=>$id];
        $sql = 'SELECT * FROM cheesecakes WHERE id=:id';
        return $this->db->paramsGetOne($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO cheesecakes 
                (title, description, img, price, quantity)
                VALUES (:title, :description, :img, :price, :quantity)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function deleteCake($params)
    {
        $sql = 'DELETE FROM cheesecakes WHERE id=:id';
        return $this->db->nonSelectQuery($sql, $params);
    }
}