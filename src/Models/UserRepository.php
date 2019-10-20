<?php
namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\Repository;
use Notorious\Shugar\Core\DB;

class UserRepository implements Repository
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

    public function save($session)
    {
        $sql = 'INSERT INTO users (session) VALUES (:session)';
        $params =[
            'session' => $session,
        ];
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function check($session)
    {
        $sql = 'SELECT * from Users WHERE session=:session';
        $params =[
            'session' =>$session
        ];
        return $this->db->paramsGetAll($sql, $params);
    }


}