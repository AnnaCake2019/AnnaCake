<?php
namespace Notorious\Shugar\Core;

use Notorious\Shugar\Core\Repository;

// родительский класс для всех классов - репозиториев
class MainRepository implements Repository
{

    protected $db;
    private $class;

    public function __construct($class)
    {
        $this->db = DB::getDB();
        $this->class = $class; 
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM ' . basename(str_replace('\\', '/', $this->class));
        return $this->db->getAll($sql, $this->class);
    }

    public function getById(int $id)
    {
        $sql = 'SELECT * FROM ' . basename(str_replace('\\', '/', $this->class)) . ' WHERE id=:id';
        return $this->db->paramsGetOne($sql, ['id'=>$id], $this->class);
    }

    public function save($data)
    {
        // TODO: Implement save() method.
    }
}