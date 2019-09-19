<?php
namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\DB;
use Notorious\Shugar\Core\Repository;

class CakeRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getAll()
    {
        // возвращает все тортики
        $sql = 'SELECT * FROM Cakes';
        return $this->db->getAll($sql);
    }

    public function getById(int $id)
    {
        // получаем тортики по id
        $sql = 'SELECT * FROM Cakes WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO Cakes 
                (title, description, img, price)
                VALUES (:title, :description, :img, :price)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function deleteCake($params)
    {
        $sql = 'DELETE FROM Cakes WHERE id=:id';
        return $this->db->nonSelectQuery($sql, $params);
    }

}