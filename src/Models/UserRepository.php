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

    // public function baskets($params)
    // {
    //     $sql = 'INSERT INTO baskets (user_id, active) VALUES (:user_id, :active)';
    //     return $this->db->nonSelectQuery($sql, $params);
    // }

    // public function isAuth($post)
    // {
    //     $sql = 'SELECT * FROM User WHERE email=:email';
    //     $params = [
    //         'email'=>$post['email']
    //     ];
    //     $result = $this->db->paramsGetOne($sql, $params);
    //     if (!$result) return false; // если по email записи не найдено, то возвращаем контроллеру false
    //     if (!password_verify($post['password'], $result['hash'])) return false;
    //     session_start();
    //     $_SESSION['name'] = $result['name'];
    //     $_SESSION['role'] = $result['role'];
    //     return true;
    // }


}