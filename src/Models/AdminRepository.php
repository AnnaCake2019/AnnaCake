<?php


namespace Notorious\Shugar\Models;
use Notorious\Shugar\Core\DB;
use Notorious\Shugar\Core\Repository;

class AdminRepository implements Repository
{
    private $db;

    public function __construct()
    {
        $this->db= \Notorious\Shugar\Core\DB::getDB();
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getById(int $id)
    {
        // TODO: Implement getById() method.
    }

    public function save($params)
    {
        $sql = 'INSERT INTO admin (email, hash) VALUES (:login, :password)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function isAuth($post){
        session_start();
        $sql = 'SELECT * FROM admin WHERE email=:email ';
        $params = [
            'email' => $post['email']
        ];
        $result = $this->db->paramsGetOne($sql, $params);
        if (!$result) return false;
        if (!password_verify($post['hash'], $result['hash'])) return false;
        session_start();
        $_SESSION['email'] = $result['email'];
        return true;
    }

    public function del($id)
    {
        // TODO: Implement del() method.
    }
}