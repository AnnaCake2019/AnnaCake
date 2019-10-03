<?php


namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\DB;
use Notorious\Shugar\Core\Repository;

class CartRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getAll()
    {

    }

    public function getById(int $id)
    {

    }

    public function save($data)
    {
        $sql = 'INSERT INTO basket(BakeryBasket_id, Users_id) VALUES (:BakeryBasket_id, :Users_id)';
        return $this->db->nonSelectQuery($sql, $data);
    }

    // public function saveToBasket($BakeryBasket)
    // {
    //     $sql = 'INSERT INTO basket(Bakery_id, Users_id) VALUES (:Bakery_id, :Users_id)';
    //     return $this->db->nonSelectQuery($sql, $data);
    // }   
}