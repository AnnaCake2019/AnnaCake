<?php
namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\Repository;
use Notorious\Shugar\Core\DB;


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

    }  

    public function clear($params)
    {
        $sql = 'DELETE FROM basket WHERE Users_id=:Users_id';
        return $this->db->nonSelectQuery($sql, $params);
    }

}
