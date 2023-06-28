<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = ['account'];
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'email', 'password', 'name', 'idCourse', 'courseName', 'isAdmin'];

    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
