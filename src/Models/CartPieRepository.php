<?php
namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\Repository;
use Notorious\Shugar\Core\DB;

class CartPieRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getById(int $id)
    {
        $sql = 'SELECT * FROM Pies WHERE id=:id';
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
        $sql = 'INSERT INTO basket(Pies_id, Users_id) VALUES (:Pies_id, :Users_id)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function getPies($id)
    {
        // получаем выпечку по id
        $sql = 'SELECT * FROM Pies WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }



    public function getBaskets($Users_id)
    {
        $sql = 'SELECT Pies_id FROM basket WHERE Users_id=:Users_id';
        $params =[
            'Users_id' => $Users_id
        ];
        return $this->db->paramsGetAll($sql, $params);
    }    

    public function getAllPies()
    {
        $sql = 'SELECT * FROM pies';
        return $this->db->getAll($sql);        
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

    public function getFromPies($piesBaskets)
    {
        $sql = 'SELECT * FROM Pies WHERE id=:id';
        $params = [
            'id' => $piesBaskets
        ];
        return $this->db->paramsGetAll($sql, $params);
    }

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