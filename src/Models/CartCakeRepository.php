<?php
namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\Repository;
use Notorious\Shugar\Core\DB;

class CartCakeRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getById(int $id)
    {
        $sql = 'SELECT * FROM Cakes WHERE id=:id';
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

    public function check($cakeId)
    {
        $sql = 'SELECT * from basket WHERE Cakes_id=:cakeId';
        $params =[
            'cakeId' =>$cakeId
        ];
        return $this->db->paramsGetAll($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO basket(Cakes_id, Users_id, count) VALUES (:Cakes_id, :Users_id, :count)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function getCake($id)
    {
        $sql = 'SELECT * FROM Cakes WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }

    public function getBaskets($Users_id)
    {
        $sql = 'SELECT Cakes_id FROM basket WHERE Users_id=:Users_id';
        $params =[
            'Users_id' => $Users_id
        ];
        return $this->db->paramsGetAll($sql, $params);
    }    

    public function getAllBakery()
    {
        $sql = 'SELECT * FROM cakes';
        return $this->db->getAll($sql);        
    }


    public function getFromCakes($cakesBaskets)
    {
        $sql = 'SELECT Cakes.*, Basket.count FROM Cakes, Basket WHERE Cakes.id=:id AND Basket.Cakes_id=:Cakes_id';
        $params = [
            'id' => $cakesBaskets,
            'Cakes_id' => $cakesBaskets
        ];
        return $this->db->paramsGetAll($sql, $params);
    }


    public function deleteCake($params)
    {
        $sql = 'DELETE FROM Basket WHERE Cakes_id=:Cakes_id AND Users_id=:Users_id';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function getCount($params)
    {
        $sql = 'SELECT count FROM Basket WHERE Cakes_id=:Cakes_id AND Users_id=:Users_id';
        return $this->db->paramsGetOne($sql, $params);
    }

    public function addOne($params)
    {
        $sql = 'UPDATE Basket SET count=:quantity WHERE Cakes_id=:Cakes_id AND Users_id=:Users_id';
        return $this->db->nonSelectQuery($sql, $params);
    }

}