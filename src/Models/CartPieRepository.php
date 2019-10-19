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

    public function check($pieId)
    {
        $sql = 'SELECT * from basket WHERE Pies_id=:pieId';
        $params =[
            'pieId' =>$pieId
        ];
        return $this->db->paramsGetAll($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO basket(Pies_id, Users_id, count) VALUES (:Pies_id, :Users_id, :count)';
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

    public function getFromPies($piesBaskets)
    {
        // $sql = 'SELECT * FROM Pies WHERE id=:id';
        $sql = 'SELECT Pies.*, Basket.count FROM Pies, Basket WHERE Pies.id=:id AND Basket.Pies_id=:Pies_id';
        $params = [
            'id' => $piesBaskets,
            'Pies_id' => $piesBaskets
        ];
        return $this->db->paramsGetAll($sql, $params);
    }

    public function deletePie($params)
    {
        $sql = 'DELETE FROM Basket WHERE Pies_id=:Pies_id AND Users_id=:Users_id';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function getCount($params)
    {
        $sql = 'SELECT count FROM Basket WHERE Pies_id=:Pies_id AND Users_id=:Users_id';
        return $this->db->paramsGetOne($sql, $params);
    }

    public function addOne($params)
    {
        $sql = 'UPDATE Basket SET count=:quantity WHERE Pies_id=:Pies_id AND Users_id=:Users_id';
        return $this->db->nonSelectQuery($sql, $params);
    }    

}