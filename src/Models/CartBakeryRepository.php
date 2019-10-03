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

    public function getById(int $id)
    {
        $sql = 'SELECT * FROM Bakery WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }

    public function getAll()
    {

    }


	public function foreing()
	{
    	$sql1 = 'SET FOREIGN_KEY_CHECKS=0';
    	return $this->db->foreing($sql1);	
	}


    public function save($params)
    {
        $sql = 'INSERT INTO bakerybasket(Bakery_id, Users_id) VALUES (:Bakery_id, :Users_id)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function getBakery($id)
    {
        // получаем выпечку по id
        $sql = 'SELECT * FROM Bakery WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }

    public function findBasket($session)
    {
        
        $sql = 'SELECT * FROM bakerybasket WHERE Users_id=:session';
        $params = ['session'=>$session];
        return $this->db->paramsGetAll($sql, $params);
    }














    public function getBaskets()
    {
        $sql = 'SELECT * FROM bakerybasket WHERE id=:id';
        $params =[
            'id' => '1'
        ];
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

    // public function check($params)
    // {
    //     $sql = 'SELECT * FROM toybasc WHERE baskets_id=:baskets_id AND toy_id=:toy_id';
    //     return $this->db->paramsGetAll($sql, $params);
    // }

    // public function getAllBakery()
    // {
    //     $sql = 'SELECT idBasket, Bakery_id FROM Basket WHERE idBasket=:idBasket';
    //     $params = [
    //         'idBasket' => '4'
    //     ];
    //     return $this->db->paramsGetAll($sql, $params);
    // }

    // public function getFromBakery(int $bakery_in_basket)
    // {
    //     $sql = 'SELECT * FROM Bakery WHERE id=:id';
    //     $params = [
    //         'id' => $bakery_in_basket
    //     ];
    //     return $this->db->paramsGetAll($sql, $params);
    // }

    // public function delete($params)
    // {
    //     $sql = 'DELETE FROM Basket WHERE Bakery_id=:Bakery_id';
    //     return $this->db->nonSelectQuery($sql, $params);
    // }

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