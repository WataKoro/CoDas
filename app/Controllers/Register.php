<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'email'         => 'required|min_length[1]|max_length[255]|valid_email',
            'password'      => 'required|min_length[1]|max_length[255]',
            'name'         => 'required|min_length[1]|max_length[255]',
            'idCourse'       => 'required|min_length[1]|max_length[255]',
            'nameCourse'       => 'required|min_length[1]|max_length[255]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'email'                 => $this->request->getVar('email'),
                'password'              => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'name'                  => $this->request->getVar('name'),
                'idCourse'                => $this->request->getVar('idCourse'),
                'nameCourse'                => $this->request->getVar('nameCourse')
            ];
            $model->save($data);
            return redirect()->to('/');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
