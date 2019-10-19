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

    public function check($bakeryId)
    {
        $sql = 'SELECT * from basket WHERE Bakery_id=:bakeryId';
        $params =[
            'bakeryId' =>$bakeryId
        ];
        return $this->db->paramsGetAll($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO basket(Bakery_id, Users_id, count) VALUES (:Bakery_id, :Users_id, :count)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function getBakery($id)
    {
        // получаем выпечку по id
        $sql = 'SELECT * FROM Bakery WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }

    public function getBaskets($Users_id)
    {
        $sql = 'SELECT Bakery_id FROM basket WHERE Users_id=:Users_id';
        $params =[
            'Users_id' => $Users_id
        ];
        return $this->db->paramsGetAll($sql, $params);
    }    

    public function getAllBakery()
    {
        $sql = 'SELECT * FROM bakery';
        return $this->db->getAll($sql);        
    }

    public function getFromBakery($bakerysBaskets)
    {
        $sql = 'SELECT Bakery.*, Basket.count FROM Bakery, Basket WHERE Bakery.id=:id AND Basket.Bakery_id=:Bakery_id';
        $params = [
            'id' => $bakerysBaskets,
            'Bakery_id' => $bakerysBaskets
        ];
        return $this->db->paramsGetAll($sql, $params);
    }

    public function deleteBakery($params)
    {
        $sql = 'DELETE FROM Basket WHERE Bakery_id=:Bakery_id AND Users_id=:Users_id';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function getCount($params)
    {
        $sql = 'SELECT count FROM Basket WHERE Bakery_id=:Bakery_id AND Users_id=:Users_id';
        return $this->db->paramsGetOne($sql, $params);
    }

    public function addOne($params)
    {
        $sql = 'UPDATE Basket SET count=:quantity WHERE Bakery_id=:Bakery_id AND Users_id=:Users_id';
        return $this->db->nonSelectQuery($sql, $params);
    }

}