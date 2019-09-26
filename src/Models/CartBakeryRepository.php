<?php
namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\Repository;
use Notorious\Shugar\Core\DB;

class CartBakeryRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }
    public function getAll()
    {

    }

    public function getBakery($id)
    {
        // получаем игрушку по id
        $sql = 'SELECT * FROM Bakery WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }

    // public function isName($account_n)
    // {
    //     $sql = 'SELECT * FROM User WHERE name=:name';
    //     $params = [
    //         'name'=>$account_n
    //     ];       
    //     return $this->db->paramsGetOne($sql, $params);
    // }  

    // public function getBas($idUs)
    // {
    //     $sql = 'SELECT * FROM Baskets WHERE user_id=:id';
    //     $params = [
    //         'id'=>$idUs
    //     ];
    //     return $this->db->paramsGetOne($sql, $params);
    // }

    public function getById(int $id)
    {
        // получаем игрушку по id
        $sql = 'SELECT * FROM Bakery WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }

    // public function check($params)
    // {
    //     $sql = 'SELECT * FROM toybasc WHERE baskets_id=:baskets_id AND toy_id=:toy_id';
    //     return $this->db->paramsGetAll($sql, $params);
    // }

    public function save($params)
    {
        $sql = 'INSERT INTO Basket(Bakery_id) VALUES (:Bakery_id)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function getAllBakery()
    {
        $sql = 'SELECT Bakery_id FROM Basket WHERE idBasket=:idBasket';
        $params = [
            'idBasket' => '1'
        ];
        return $this->db->paramsGetAll($sql, $params);
    }

    public function getFromBakery($bakery_in_basket)
    {
        $sql = 'SELECT * FROM Bakery WHERE id=:id';
        $params = [
            'id' => $bakery_in_basket
        ];
        return $this->db->paramsGetAll($sql, $params);
    }

    public function delete($params)
    {
        $sql = 'DELETE FROM Basket WHERE Bakery_id=:Bakery_id';
        return $this->db->nonSelectQuery($sql, $params);
    }

    // public function buy($params)
    // {
    //     $sql = 'INSERT INTO orders(Status_id, baskets_id) VALUES (:Status_id, :baskets_id)';
    //     return $this->db->nonSelectQuery($sql, $params);
    // }

    // public function deleteFromBasket($data)
    // {
    //     $sql = 'DELETE FROM Toybasc WHERE baskets_id=:baskets_id';
    //     return $this->db->nonSelectQuery($sql, $data);

    // }


}