<?php
namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\Repository;
use Notorious\Shugar\Core\DB;

class CartCheesecakeRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getById(int $id)
    {
        $sql = 'SELECT * FROM cheesecakes WHERE id=:id';
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

    public function check($id)
    {
        $sql = 'SELECT * from basket WHERE Cheesecakes_id=:id';
        $params =[
            'id' =>$id
        ];
        return $this->db->paramsGetAll($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO basket(Cheesecakes_id, Users_id, count) VALUES (:id, :Users_id, :count)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function getCheesecakes($id)
    {
        $sql = 'SELECT * FROM cheesecakes WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }



    public function getBaskets($Users_id)
    {
        $sql = 'SELECT Cheesecakes_id FROM basket WHERE Users_id=:Users_id';
        $params =[
            'Users_id' => $Users_id
        ];
        return $this->db->paramsGetAll($sql, $params);
    }    

    public function getAllCheesecakes()
    {
        $sql = 'SELECT * FROM cheesecakes';
        return $this->db->getAll($sql);        
    }

    public function getFromCheesecakes($cheesecakesBaskets)
    {
        // $sql = 'SELECT * FROM cheesecakes WHERE id=:id';
        $sql = 'SELECT cheesecakes.*, Basket.count FROM cheesecakes, Basket WHERE cheesecakes.id=:id AND Basket.Cheesecakes_id=:Cheesecakes_id';
        $params = [
            'id' => $cheesecakesBaskets,
            'Cheesecakes_id' => $cheesecakesBaskets
        ];
        return $this->db->paramsGetAll($sql, $params);
    }

    public function deleteCheese($params)
    {
        $sql = 'DELETE FROM Basket WHERE Cheesecakes_id=:Cheesecakes_id AND Users_id=:Users_id';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function getCount($params)
    {
        $sql = 'SELECT count FROM Basket WHERE Cheesecakes_id=:Cheesecakes_id AND Users_id=:Users_id';
        return $this->db->paramsGetOne($sql, $params);
    }

    public function addOne($params)
    {
        $sql = 'UPDATE Basket SET count=:quantity WHERE Cheesecakes_id=:Cheesecakes_id AND Users_id=:Users_id';
        return $this->db->nonSelectQuery($sql, $params);
    }


}